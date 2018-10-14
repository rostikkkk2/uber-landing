<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
  'id' => 'basic',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'language' => 'ru',
  'layout' => 'basic',
  'aliases' => [
    '@bower' => '@vendor/bower-asset',
    '@npm'   => '@vendor/npm-asset',
  ],
  'components' => [
    'request' => [
      'baseUrl' => '',
      'cookieValidationKey' => 'p9fGB69gdLp32d8gzE_nxeYa5qzmhF6g',
    ],
    'authManager' => [
      'class' => 'yii\rbac\DbManager',
    ],
    'cache' => [
      'class' => 'yii\caching\FileCache',
    ],
    'user' => [
      'identityClass' => 'app\modules\admin\models\User',
      'enableAutoLogin' => true,
      'loginUrl' => ['admin'],
    ],
    'errorHandler' => [
      'errorAction' => 'error/error',
    ],
    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
      'useFileTransport' => true,
    ],
    'mail' => [
      'class' => 'yii\swiftmailer\Mailer',
      'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.sendgrid.net',
        'username' => 'apikey',
        'password' => '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',
        'port' => '587',
        'encryption' => 'tls',
      ]
    ],
    'log' => [
      'traceLevel' => YII_DEBUG ? 3 : 0,
      'targets' => [
        [
          'class' => 'yii\log\FileTarget',
          'levels' => ['error', 'warning'],
        ],
      ],
    ],
    'db' => $db,
    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => [
        '' => '/landing/index',
        'POST admin/<controller>/delete-worker/<id:\d+>' => '/admin/list/delete-worker',
        'POST admin/<controller>/delete-worker-all' => '/admin/list/delete-worker-all',
        'POST admin/<controller>/delete-partner/<id:\d+>' => '/admin/list/delete-partner',
        'POST admin/<controller>/delete-partner-all' => '/admin/list/delete-partner-all',
      ],
    ],
  ],
  'modules' => [
    'admin' => [
      'class' => 'app\modules\admin\Module',
    ],
  ],
  'params' => $params,
];

if (YII_ENV_DEV) {
  $config['bootstrap'][] = 'debug';
  $config['modules']['debug'] = [
      'class' => 'yii\debug\Module',
  ];

  $config['bootstrap'][] = 'gii';
  $config['modules']['gii'] = [
      'class' => 'yii\gii\Module',
  ];
}

return $config;
