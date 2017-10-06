<?php

return [
    'components' => [
        'autobus' => [
            'branches' => [
                'logs' => [
                    'search' => [
                        'class'  => \hiapi\modules\logs\commands\LogsSearchCommand::class,
                    ],
                ],
            ],
        ],
    ],
];
