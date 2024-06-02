<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Digital Marketing Framework - Distributor - Collector Data Provider',
    'description' => 'Update distributor data with collected user data',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '2.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'dmf_collector_core' => '2.0.0-2.99.99',
            'dmf_distributor_core' => '2.0.0-2.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
