<?php

namespace Plugin\UnivaPay\EventListener;

use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Service\CartService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Plugin\UnivaPay\Entity\SubscriptionPeriod;

class CartValidationEventListener implements EventSubscriberInterface
{
    private $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::FRONT_PRODUCT_CART_ADD_COMPLETE => 'onCartComplete'
        ];
    }

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
            throw new BadRequestHttpException(trans('univa_pay.error.cart.subscription.only_one_item'));
        }
    }
}
