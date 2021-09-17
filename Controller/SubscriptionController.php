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
                $newOrder = new Order;
                $newOrder->setMessage($existOrder->getMessage());
                $newOrder->setName01($existOrder->getName01());
                $newOrder->setName02($existOrder->getName02());
                $newOrder->setKana01($existOrder->getKana01());
                $newOrder->setKana02($existOrder->getKana02());
                $newOrder->setCompanyName($existOrder->getCompanyName());
                $newOrder->setEmail($existOrder->getEmail());
                $newOrder->setPhoneNumber($existOrder->getPhoneNumber());
                $newOrder->setPostalCode($existOrder->getPostalCode());
                $newOrder->setAddr01($existOrder->getAddr01());
                $newOrder->setAddr02($existOrder->getAddr02());
                $newOrder->setBirth($existOrder->getBirth());
                $newOrder->setSubtotal($existOrder->getSubtotal());
                $newOrder->setDiscount($existOrder->getDiscount());
                $newOrder->setDeliveryFeeTotal($existOrder->getDeliveryFeeTotal());
                $newOrder->setCharge($existOrder->getCharge());
                $newOrder->setTax($existOrder->getTax());
                $newOrder->setTotal($existOrder->getTotal());
                $newOrder->setPaymentTotal($existOrder->getPaymentTotal());
                $newOrder->setPaymentMethod($existOrder->getPaymentMethod());
                $newOrder->setNote($existOrder->getNote());
                $newOrder->setCurrencyCode($existOrder->getCurrencyCode());
                $newOrder->setCompleteMessage($existOrder->getCompleteMessage());
                $newOrder->setCompleteMailMessage($existOrder->getCompleteMailMessage());
                $newOrder->setPaymentDate($existOrder->getPaymentDate());
                $newOrder->setCustomer($existOrder->getCustomer());
                $newOrder->setCountry($existOrder->getCountry());
                $newOrder->setPref($existOrder->getPref());
                $newOrder->setSex($existOrder->getSex());
                $newOrder->setJob($existOrder->getJob());
                $newOrder->setPayment($existOrder->getPayment());
                $newOrder->setDeviceType($existOrder->getDeviceType());
                $newOrder->setCustomerOrderStatus($existOrder->getCustomerOrderStatus());
                $newOrder->setOrderStatusColor($existOrder->getOrderStatusColor());
                foreach($existOrder->getOrderItems() as $value) {
                    $newOrderItem = clone $value;
                    $newOrderItem->setOrder($newOrder);
                    $newOrder->addOrderItem($newOrderItem);
                }
                foreach($existOrder->getShippings() as $value) {
                    $newShipping = clone $value;
                    $newShipping->setOrder($newOrder);
                    $newOrder->addShipping($newShipping);
                }
                $purchaseContext = new PurchaseContext($newOrder, $newOrder->getCustomer());
                // 注文番号変更
                $preOrderId = $this->orderHelper->createPreOrderId();
                $newOrder->setPreOrderId($preOrderId);
                // 今回での決済の課金ID取得
                $charge = $util->getchargeBySubscriptionId($data->data->id);
                $newOrder->setUnivapayChargeId($charge->id);
                // 購入処理を完了
                $this->purchaseFlow->prepare($newOrder, $purchaseContext);
                $this->purchaseFlow->commit($newOrder, $purchaseContext);
                $this->entityManager->persist($newOrder);
                // 注文番号再採番
                $this->entityManager->flush();
                $this->orderNoProcessor->process($newOrder, $purchaseContext);
                $this->entityManager->flush();
                return $this->json(["status" => true]);
            }
        }

        throw new BadRequestHttpException();
    }
}
