<?php
namespace Plugin\UnivaPayPlugin\Controller\Admin;

use Eccube\Controller\AbstractController;
use Eccube\Entity\Order;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Plugin\UnivaPayPlugin\Util\SDK;
use Plugin\UnivaPayPlugin\Repository\ConfigRepository;
use Money\Currency;
use Money\Money;

class OrderController extends AbstractController
{
    /** @var ConfigRepository */
    protected $Config;

    /**
     * OrderController constructor.
     *
     * @param ConfigRepository $configRepository
     */
    public function __construct(ConfigRepository $configRepository) {
        $this->Config = $configRepository;
    }

    /**
     * Change status
     *
     * @Method("POST")
     * @Route("/%eccube_admin_route%/univapay/order/change/{id}", requirements={"id" = "\d+"}, name="univapay_admin_order_change")
     */
    public function changeStatus(Request $request, Order $Order)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            $util = new SDK($this->Config->findOneById(1));
            $chargeId = $Order->getUnivapayChargeId();
            $charge = $util->getCharge($chargeId);
            switch ($request->get("action")) {
                case "capture":
                    $charge->capture();
                    break;
                case "cancel":
                    if($charge->status->getName() === "SUCCESSFUL") {
                        $money = new Money($charge->chargedAmountFormatted, new Currency($charge->chargedCurrency.""));
                        $charge->createRefund($money)->awaitResult();
                    } else {
                        $charge->cancel()->awaitResult();
                    }
                    break;
            }

            $this->addSuccess('univapay.admin.order.change_status.success', 'admin');

            $charge->fetch();
            return $this->json($charge->status);
        }

        throw new BadRequestHttpException();
    }

    /**
     * Get status
     *
     * @Method("GET")
     * @Route("/%eccube_admin_route%/univapay/order/get/{id}", requirements={"id" = "\d+"}, name="univapay_admin_order_get")
     */
    public function getStatus(Request $request, Order $Order)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            $util = new SDK($this->Config->findOneById(1));
            $charge = $util->getCharge($Order->getUnivapayChargeId());

            return $this->json($charge->status);
        }

        throw new BadRequestHttpException();
    }
}
