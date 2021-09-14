<?php
namespace Plugin\UnivaPayPlugin\Controller;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SubscriptionController extends AbstractController
{
    /**
     * subscription webhook action
     *
     * @Method("POST")
     * @Route("/univapay/hook", name="univapay_hook")
     */
    public function hook(Request $request)
    {
        return $this->json($request);
    }
}
