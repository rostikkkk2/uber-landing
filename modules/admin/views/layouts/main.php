<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
$this->registerLinkTag([
  'rel' => 'icon',
  'type' => 'image/png',
  'href' => '/web/favicon.ico'
]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
  <body>
    <?php $this->beginBody() ?>
    <div class="wrap">
      <?php
      NavBar::begin([
        'brandLabel' => '<img id="logo" class="logo-admin" src="/images/logo.png" alt="logo">' . '<b>Админка</b>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
          'class' => 'navbar-inverse navbar-fixed-top',
        ],
      ]);
      echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
          Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/admin']]
          ) : (
            '<li>'
            . Html::beginForm(['/admin/list'], 'post')
            . Html::submitButton(
                'Новые работники', ['class' => 'mt-5 btn btn-link']
            )
            . Html::endForm()
            . '<li>'
            . Html::beginForm(['/admin/list/partner'])
            . Html::submitButton(
                'Работники на смену партнера', ['class' => 'mt-5 btn btn-link']
            )
            . Html::endForm()
            . '</li>'
            . '<li>'
            . Html::beginForm(['/admin/default/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'mt-5 btn btn-link logout']
            )
            . Html::endForm()
            . '</li>'
          )
        ],
      ]);
      NavBar::end();
      ?>

      <div class="container">
        <?= Breadcrumbs::widget([
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
      </div>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
