<?php

namespace Plugin\UnivaPay\EventListener;

use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Service\CartService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Plugin\UnivaPay\Entity\SubscriptionPeriod;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;

class CartValidationEventListener implements EventSubscriberInterface
{
    private $cartService;
    private $session;
    private $router;
    private $security;

    public function __construct(
        SessionInterface $session,
        CartService $cartService,
        RouterInterface $router,
        Security $security
    ) {
        $this->cartService = $cartService;
        $this->session = $session;
        $this->router = $router;
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::FRONT_PRODUCT_CART_ADD_COMPLETE => 'onCartComplete',
            EccubeEvents::FRONT_SHOPPING_LOGIN_INITIALIZE => 'onShopping'
        ];
    }

    // only allow one subscription item in the cart
    public function onCartComplete(EventArgs $event)
    {
        $hasSubsciption = false;

        foreach ($this->cartService->getCart()->getCartItems() as $item) {
            $subscriptionPeriod = $item->getProductClass()->getSubscriptionPeriod();
            if ($subscriptionPeriod !== null && $subscriptionPeriod !== SubscriptionPeriod::NON_SUBSCRIPTION) {
                $hasSubsciption = true;
                break;
            }
        }

        if (count($this->cartService->getCart()->getCartItems()) > 1 && $hasSubsciption) {
            $this->session->getFlashBag()->set('eccube.front.request.error', trans('univa_pay.error.cart.subscription.only_one_item'));
            throw new BadRequestHttpException(trans('univa_pay.error.cart.subscription.only_one_item'));
        }
    }

    // only allow member to purchase subscription item
    public function onShopping(EventArgs $event)
    {
        // $hasSubsciption = false;

        // foreach ($this->cartService->getCart()->getCartItems() as $item) {
        //     $subscriptionPeriod = $item->getProductClass()->getSubscriptionPeriod();
        //     if ($subscriptionPeriod !== null && $subscriptionPeriod !== SubscriptionPeriod::NON_SUBSCRIPTION) {
        //         $hasSubsciption = true;
        //         break;
        //     }
        // }

        // if ($hasSubsciption && !$this->security->getUser()) {
        //     $this->session->getFlashBag()->add('eccube.front.request.error', trans('univa_pay.error.login_required_for_subscription'));
        //     $response = new RedirectResponse($this->router->generate('mypage_login'));
        //     $event->setResponse($response);
        // }
    }
}
