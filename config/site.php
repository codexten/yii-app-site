<?php

/* @var $params array */

use yii\i18n\PhpMessageSource;

return [
    'runtimePath' => '@root/runtime/site',
    'defaultRoute' => 'site/index',
    'controllerNamespace' => '\eii\site\controllers',
    'components' => [
        'i18n' => [
            'translations' => [
                'entero:site' => [
                    'class' => PhpMessageSource::class,
                    'basePath' => '@codexten/yii/site/messages',
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => [
                        '@codexten/yii/site/views',
                    ],
                ],
            ],
        ],
        'urlManager' => $core['components']['urlManagerSite'],
    ],
];