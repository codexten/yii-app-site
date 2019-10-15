<?php

/* @var $params array */

return [
    'aliases' => [
        'siteUrl' => $params['siteUrl'],
        'site' => '@root/public/site',
    ],
    'components' => [
        'urlManagerSite' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '@siteUrl',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];