<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/6/18
 * Time: 4:20 PM
 */

return [
    'runtimePath' => '@root/runtime/site',
    'defaultRoute' => 'site/index',
    'controllerNamespace' => '\eii\site\controllers',
    'components' => [
        'i18n' => [
            'translations' => [
                'entero:site' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
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
    ],
];