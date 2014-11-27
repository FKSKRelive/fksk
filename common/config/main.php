<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    	'i18n' => [
    		'translations' => [
    			'app*' => [
		    		'class' => 'yii\i18n\PhpMessageSource',
    				'basePath' => '@common/messages',
    				'fileMap' => [
    					'app' => 'app.php',
    					'app/error' => 'error.php',
    				],
    			],
    			'index*' => [
    				'class' => 'yii\i18n\PhpMessageSource',
    				'basePath' => '@common/messages',
    				'fileMap' => [
    					'index' => 'index.php',
    					'index/error' => 'error.php',
    				],
    			],
    		],
    		
    	],
    ],
];
