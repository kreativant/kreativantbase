<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'kreativant.Base',
    'description' => 'kreativant. TYPO3 Base Distribution',
    'category' => 'templates',
    'author' => 'Marcel Bathen',
    'author_company' => 'kreativant.',
    'author_email' => 'hello@kreativant.de',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
            'php' => '5.4.0-7.9.999',
            'realurl' => '2.0.0-2.9.999',
            //'ws_scss' => '1.0.0-1.9.999'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'Kreativant\\KreativantBase\\' => 'Classes'
        ]
    ],
];