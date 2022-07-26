<?php
namespace Plugin\UnivaPay\Service\Method;

use Eccube\Entity\Master\OrderStatus;
use Eccube\Entity\Order;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Service\Payment\PaymentDispatcher;
use Eccube\Service\Payment\PaymentMethodInterface;
use Eccube\Service\Payment\PaymentResult;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Symfony\Component\Form\FormInterface;
use Plugin\UnivaPay\Controller\Admin\OrderController;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Plugin\UnivaPay\Util\SDK;

/**
 * クレジットカード(Subscription)の決済処理を行う.
 */
class Subscription implements PaymentMethodInterface
{
    /**
     * @var Order
     */
    protected $Order;

    /**
     * @var FormInterface
     */
    protected $form;

    /**
     * @var OrderStatusRepository
     */
    private $orderStatusRepository;

    /**
     * @var PurchaseFlow
     */
    private $purchaseFlow;

    /** @var ConfigRepository */
    protected $Config;

    /**
     * CreditCard constructor.
     *
     * @param OrderStatusRepository $orderStatusRepository
     * @param PurchaseFlow $shoppingPurchaseFlow
     * @param ConfigRepository $configRepository
     */
    public function __construct(
        OrderStatusRepository $orderStatusRepository,
        PurchaseFlow $shoppingPurchaseFlow,
        ConfigRepository $configRepository
    ) {
        $this->orderStatusRepository = $orderStatusRepository;
        $this->purchaseFlow = $shoppingPurchaseFlow;
        $this->Config = $configRepository;
    }

    /**
     * 注文確認画面遷移時に呼び出される.
     *
     * @return PaymentResult
     *
     * @throws \Eccube\Service\PurchaseFlow\PurchaseException
     */
    public function verify()
    {
        // 註文確定時に決済を行うのでここでは何もしない

        $result = new PaymentResult();
        $result->setSuccess(true);

        return $result;
    }

    /**
     * 注文時に呼び出される.
     *
     * 受注ステータス, 決済ステータスを更新する.
     * ここでは決済サーバとの通信は行わない.
     *
     * @return PaymentDispatcher|null
     */
    public function apply()
    {
        // 受注ステータスを決済処理中へ変更
        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::PENDING);
        $this->Order->setOrderStatus($OrderStatus);

        // purchaseFlow::prepareを呼び出し, 購入処理を進める.
        $this->purchaseFlow->prepare($this->Order, new PurchaseContext());
    }

    /**
     * 注文時に呼び出される.
     *
     * クレジットカードの決済処理を行う.
     *
     * @return PaymentResult
     */
    public function checkout()
    {
        // Subscription決済時はsubscription idが格納される
        $subscriptionId = $this->Order->getUnivapayChargeId();

        if ($subscriptionId) {
            // Subscription idからcharge idを取得して格納
            $util = new SDK($this->Config->findOneById(1));
            $token = $util->getchargeBySubscriptionId($subscriptionId)->id;
            $this->Order->setUnivapaySubscriptionId($subscriptionId);
            $this->Order->setUnivapayChargeId($token);
            $items = [];
            foreach($this->Order->getOrderItems() as $value) {
                // 商品単位で金額を取得
                if($value->isProduct()) {
                    $class = $value->getProductClass();
                    $items[$class->getId()] = ['price' => $class->getPrice01(), 'tax' => $class->getPrice01IncTax() - $class->getPrice01()];
                }
            }
            $this->Order->setUnivapayChargeAmount(json_encode($items));

            // purchaseFlow::commitを呼び出し, 購入処理を完了させる.
            $this->purchaseFlow->commit($this->Order, new PurchaseContext());

            // サブスクではcapture済みなので支払済みに変更
            $OrderStatus = $this->orderStatusRepository->find(OrderStatus::PAID);
            $this->Order->setOrderStatus($OrderStatus);
            $this->Order->setPaymentDate(new \DateTime());

            $result = new PaymentResult();
            $result->setSuccess(true);
        } else {
            // 受注ステータスを購入処理中へ変更
            $OrderStatus = $this->orderStatusRepository->find(OrderStatus::PROCESSING);
            $this->Order->setOrderStatus($OrderStatus);

            // 失敗時はpurchaseFlow::rollbackを呼び出す.
            $this->purchaseFlow->rollback($this->Order, new PurchaseContext());

            $result = new PaymentResult();
            $result->setSuccess(false);
            $result->setErrors([trans('univa_pay.shopping.checkout.error')]);
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormType(FormInterface $form)
    {
        $this->form = $form;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(Order $Order)
    {
        $this->Order = $Order;
    }
}
