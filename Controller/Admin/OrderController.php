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

class OrderController extends AbstractController
{
    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    /**
     * ConfigController constructor.
     *
     * @param ConfigRepository $configRepository
     */
    public function __construct(ConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
    }

    /**
     * 受注編集 > 決済のキャンセル処理
     *
     * @Method("POST")
     * @Route("/%eccube_admin_route%/univapay/order/cancel/{id}", requirements={"id" = "\d+"}, name="univapay_admin_order_cancel")
     */
    public function cancel(Request $request, Order $Order)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            $client = $hits->initClient();
            $charge = $this->getCharge($client, $Order->getUnivapayChargeId());

            $this->addSuccess('univapay.admin.order.cancel.success', 'admin');

            return $this->json([]);
        }

        throw new BadRequestHttpException();
    }

    /**
     * 受注編集 > 決済の金額変更
     *
     * @Method("POST")
     * @Route("/%eccube_admin_route%/univapay/order/change_price/{id}", requirements={"id" = "\d+"}, name="univapay_admin_order_change_price")
     */
    public function changePrice(Request $request, Order $Order)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            $client = $hits->initClient();
            $charge = $this->getCharge($client, $Order->getUnivapayChargeId());

            $this->addSuccess('univapay.admin.order.change_price.success', 'admin');

            return $this->json([]);
        }

        throw new BadRequestHttpException();
    }

    /**
     * 受注編集 > 決済状況の取得
     *
     * @Method("GET")
     * @Route("/%eccube_admin_route%/univapay/order/get/{id}", requirements={"id" = "\d+"}, name="univapay_admin_order_get")
     */
    public function getStatus(Request $request, Order $Order)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            $client = $hits->initClient();
            $charge = $this->getCharge($client, $Order->getUnivapayChargeId());

            return $this->json(json_encode($charge));
        }

        throw new BadRequestHttpException();
    }

    // get charge
    private function getCharge($client, $chargeId) {
        $client->getMe();
        $stores = $client->listStores();
        $store = current($stores->items)->fetch();

        return $client->getCharge($store, $chargeId);
    }

    // init client
    private function initClient() {
        $Config = $this->configRepository->get();
        $clientOptions = new UnivapayClientOptions($Config->getApiUrl());
        $client = new UnivapayClient(AppJWT::createToken($Config->getAppId(), $Config->getAppSecret(), $clientOptions));

        return $client;
    }
}
