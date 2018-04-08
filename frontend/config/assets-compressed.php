<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2018-04-08 13:34:22
 */
return [
    'all' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot',
        'baseUrl' => '@web',
        'js' => [
            'compiled-assets/all-edc88f77d6ffdc7f2da2c4271e0bc7f8.js',
        ],
        'css' => [
            'compiled-assets/all-6cc0e11151444de7e472392cf7a088db.css',
        ],
        'sourcePath' => null,
        'depends' => [],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'all',
        ],
    ],
    'yii\\bootstrap\\BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'frontend\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [
            'https://fonts.googleapis.com/css?family=Open+Sans:300,400',
            'https://fonts.googleapis.com/css?family=Lato',
            'https://fonts.googleapis.com/css?family=Raleway',
            '//cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css',
        ],
        'depends' => [
            'yii\\web\\YiiAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'all',
        ],
    ],
    'yii\\widgets\\PjaxAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'all',
        ],
    ],
    'yii\\validators\\ValidationAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'all',
        ],
    ],
    'yii\\widgets\\ActiveFormAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'all',
        ],
    ],
];