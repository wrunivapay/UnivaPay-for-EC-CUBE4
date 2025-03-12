<?php
namespace Plugin\UnivaPay\Controller\Admin;

use Eccube\Controller\AbstractController;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends AbstractController
{
    /**
     * @Route("/%eccube_admin_route%/univapay/webhook_events", name="univapay_webhook_events", methods={"GET"})
     * @Template("@UnivaPay/admin/webhook_index.twig")
     */
    public function webhook(Request $request, Paginator $paginator)
    {
    }
}
