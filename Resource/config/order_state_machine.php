<?php

use Eccube\Entity\Master\OrderStatus;
use Plugin\UnivaPay\Entity\Master\UnivaPayOrderStatus;

$container->loadFromExtension('framework', [
    'workflows' => [
        'order' => [
            'places' => [
                (string) UnivaPayOrderStatus::UNIVAPAY_SUBSCRIPTION
            ],
            'transitions' => [
                'cancel_subscription' => [
                    'from' => [
                        (string) UnivaPayOrderStatus::UNIVAPAY_SUBSCRIPTION
                    ],
                    'to' => (string) OrderStatus::CANCEL
                ]
            ]
        ]
    ]
]);
