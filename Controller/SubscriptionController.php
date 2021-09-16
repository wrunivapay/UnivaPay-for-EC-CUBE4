<?php
namespace Plugin\UnivaPayPlugin\Controller;

use Eccube\Entity\Order;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Repository\OrderRepository;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Service\OrderHelper;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor;
use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Plugin\UnivaPayPlugin\Util\SDK;
use Plugin\UnivaPayPlugin\Repository\ConfigRepository;

class SubscriptionController extends AbstractController
{
    /** @var ConfigRepository */
    protected $Config;

    /** @var OrderRepository */
    protected $Order;

    /**
     * @var OrderStatusRepository
     */
    private $orderStatusRepository;

    /**
     * @var PurchaseFlow
     */
    private $purchaseFlow;

    /**
     * @var OrderHelper
     */
    private $orderHelper;

    /**
     * OrderController constructor.
     *
     * @param ConfigRepository $configRepository
     * @param OrderRepository $orderRepository
     * @param OrderStatusRepository $orderStatusRepository
     * @param PurchaseFlow $shoppingPurchaseFlow
     * @param OrderHelper $orderHelper
     * @param OrderNoProcessor $orderNoProcessor
     */
    public function __construct(
        ConfigRepository $configRepository,
        OrderRepository $orderRepository,
        OrderStatusRepository $orderStatusRepository,
        PurchaseFlow $shoppingPurchaseFlow,
        OrderHelper $orderHelper,
        OrderNoProcessor $orderNoProcessor
    ) {
        $this->Config = $configRepository;
        $this->Order = $orderRepository;
        $this->orderStatusRepository = $orderStatusRepository;
        $this->purchaseFlow = $shoppingPurchaseFlow;
        $this->orderHelper = $orderHelper;
        $this->orderNoProcessor = $orderNoProcessor;
    }

    /**
     * subscription webhook action
     *
     * @Method("POST")
     * @Route("/univapay/hook", name="univapay_hook")
     */
    public function hook(Request $request)
    {
        $data = json_decode($request->getContent());
        $util = new SDK($this->Config->findOneById(1));
        if($data->event === 'subscription_payment') {
            $existOrder = $this->Order->findOneBy(["order_no" => $data->data->metadata->orderNo]);
            if(!is_null($existOrder)) {
                $newOrder = clone $existOrder;
                $purchaseContext = new PurchaseContext($existOrder, $existOrder->getCustomer());
                // 注文番号変更
                $preOrderId = $this->orderHelper->createPreOrderId();
                $newOrder->setPreOrderId($preOrderId);
                // 今回での決済の課金ID取得
                $token = $util->getchargeBySubscriptionId($data->data->id)->id;
                $newOrder->setUnivapayChargeId($token);
                // 前回注文の注文状況が変更されている可能性があるので上書き
                $OrderStatus = $this->orderStatusRepository->find(OrderStatus::NEW);
                $newOrder->setOrderStatus($OrderStatus);
                // 購入処理を完了
                $this->purchaseFlow->prepare($newOrder, $purchaseContext);
                $this->purchaseFlow->commit($newOrder, $purchaseContext);
                $this->entityManager->persist($newOrder);
                // 注文番号再採番
                $this->entityManager->flush();
                $this->orderNoProcessor->process($newOrder, $purchaseContext);
                $this->entityManager->flush();
                // OrderNo変更(実装予定)
                return $this->json($token);
            }
        }

        throw new BadRequestHttpException();
    }
}
