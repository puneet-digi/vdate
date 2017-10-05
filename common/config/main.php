<?php

function c($expression, $dump = false){
  echo '<pre>';
  (!$dump ? print_r($expression) : var_dump($expression));
  echo '</pre>';
}

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ]
    ],
	'modules' => [
        'admin' => [
            'class' => 'app\rest\Module',
        ],
    ],       
];
