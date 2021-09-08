<?php
namespace Plugin\UnivaPayForECCUBE4\Controller;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * リンク式決済のカード番号入力画面.
 */
class PaymentCompanyController extends AbstractController
{
    /**
     * 決済サーバのカード入力画面.
     *
     * @Route("/payment_company")
     * @Template("@UnivaPayForECCUBE4/dummy.twig")
     */
    public function index(Request $request)
    {
        $orderNo = $request->get('no');

        if ('POST' === $request->getMethod()) {
            // EC-CUBEの決済完了受付リンク
            $url = '/univapay_complete';

            // 注文番号を付与
            $url .= '?no='.$orderNo;

            return new RedirectResponse($url);
        }

        return [
            'order_no' => $orderNo,
        ];
    }
}
