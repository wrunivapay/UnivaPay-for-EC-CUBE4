<?php

use Plugin\UnivaPay\Entity\Master\UnivaPayOrderStatus;

$container->loadFromExtension('framework', [
    'workflows' => [
        'order' => [
            'places' => [
                (string) UnivaPayOrderStatus::UNIVAPAY_SUBSCRIPTION
            ]
        ]
    ]
]);
