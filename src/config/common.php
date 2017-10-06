<?php
/**
 * User activity logs module for hiAPI
 *
 * @link      https://github.com/hiqdev/hiapi-module-logs
 * @package   hiapi-module-logs
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

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
