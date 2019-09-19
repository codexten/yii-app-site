<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 25/3/19
 * Time: 10:31 AM
 */

return [
    'aliases' => [
        'siteUrl' => $params['siteUrl'],
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