<?php
namespace Plugin\UnivaPayPlugin\Controller\Admin;

use Eccube\Controller\AbstractController;
use Eccube\Entity\Order;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Plugin\UnivaPayPlugin\Repository\ConfigRepository;
use Univapay\UnivapayClient;
use Univapay\UnivapayClientOptions;
use Univapay\Resources\Authentication\AppJWT;
use Money\Currency;
use Money\Money;

class OrderController extends AbstractController
{
    private $token;
    private $client;

    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    /**
     * OrderController constructor.
     *
     * @param ConfigRepository $configRepository
     */
    public function __construct(ConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
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
            $this->initClient();
            $chargeId = $Order->getUnivapayChargeId();
            $charge = $this->getCharge($chargeId);
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
            $this->initClient();
            $charge = $this->getCharge($Order->getUnivapayChargeId());

            return $this->json($charge->status);
        }

        throw new BadRequestHttpException();
    }

    // get charge
    private function getCharge($chargeId) {
        return $this->client->getCharge($this->token->storeId, $chargeId);
    }

    // get charge from subscriptionId
    public function getchargeBySubscriptionId($subscriptionId) {
        return $this->client->getSubscription($this->token->storeId, $subscriptionId);
    }

    // init client
    public function initClient() {
        $Config = $this->configRepository->get();
        $clientOptions = new UnivapayClientOptions($Config->getApiUrl());
        $this->token = AppJWT::createToken($Config->getAppId(), $Config->getAppSecret());
        $this->client = new UnivapayClient($this->token, $clientOptions);

        return $this->client;
    }
}
