<?php
namespace Plugin\UnivaPay\Controller\Api;

use Eccube\Controller\AbstractController;
use Eccube\Entity\Order;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Repository\Master\OrderStatusRepository;
use Money\Currency;
use Money\Money;
use Plugin\UnivaPay\Util\SDK;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class OrderController extends AbstractController
{
    /** @var ConfigRepository */
    protected $Config;

    /**
     * @var OrderStatusRepository
     */
    private $orderStatusRepository;

    /**
     * OrderController constructor.
     *
     * @param ConfigRepository $configRepository
     * @param OrderStatusRepository $orderStatusRepository
     */
    public function __construct(
        ConfigRepository $configRepository,
        OrderStatusRepository $orderStatusRepository
    ) {
        $this->Config = $configRepository;
        $this->orderStatusRepository = $orderStatusRepository;
    }

    /**
     * Change status
     *
     * @Route("/%eccube_admin_route%/univapay/order/change/{id}", requirements={"id" = "\d+"}, name="univa_pay_admin_order_change", methods={"POST"})
     */
    public function changeStatus(Request $request, Order $Order)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            $util = new SDK($this->Config->findOneById(1));
            $chargeId = $Order->getUnivapayChargeId();
            if ($chargeId) {
                // charge
                $charge = $util->getCharge($chargeId);
                switch ($request->get("action")) {
                    case "capture":
                        $charge->capture();
                        $charge->fetch();
                        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::PAID);
                        $Order->setPaymentDate(new \DateTime());
                        break;
                    case "cancel":
                        if($charge->status->getName() === "SUCCESSFUL") {
                            $money = new Money($charge->chargedAmountFormatted, new Currency($charge->chargedCurrency.""));
                            $charge->createRefund($money)->awaitResult();
                        } else {
                            $charge->cancel()->awaitResult();
                        }
                        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::CANCEL);
                        break;
                }
                $Order->setOrderStatus($OrderStatus);
                $this->entityManager->persist($Order);
                $this->entityManager->flush();

                $this->addSuccess('univa_pay.admin.order.change_status.success', 'admin');

                return $this->json($charge->status);
            } else {
                // subscription
                $subscriptionId = $Order->getUnivapaySubscriptionId();
                $subscription = $util->getSubscription($subscriptionId);
                // TODO: if already canceled, do nothing
                if ($subscription->cancel()) {
                    $OrderStatus = $this->orderStatusRepository->find(OrderStatus::CANCEL);

                    $Order->setOrderStatus($OrderStatus);
                    $this->entityManager->persist($Order);
                    $this->entityManager->flush();

                    $this->addSuccess('univa_pay.admin.order.change_status.success', 'admin');

                    return $this->json(['status' => $subscription->status]);
                }
            }
        }

        throw new BadRequestHttpException();
    }

    /**
     * Get status
     *
     * @Route("/%eccube_admin_route%/univapay/order/get/{id}", requirements={"id" = "\d+"}, name="univa_pay_admin_order_get", methods={"GET"})
     */
    public function getStatus(Request $request, Order $Order)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            $util = new SDK($this->Config->findOneById(1));
            $charge = $util->getCharge($Order->getUnivapayChargeId());
            $ret = [
                'status' => $charge->status->getValue(),
                'id' => $charge->id,
                'subscription_id' => $charge->subscriptionId
            ];
            $refund = current(current($charge->listRefunds()));
            if($refund) {
                $ret['status'] = 'refund';
                if($refund->status->getValue() !== 'successful') {
                    $ret['status'] = $refund->status->getValue();
                }
            }

            return $this->json($ret);
        }

        throw new BadRequestHttpException();
    }
}
