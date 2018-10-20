<?php
  use app\assets\AppAsset;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\models\NewWorker;
  use app\models\Partner;
  use yii\bootstrap\Nav;
  use yii\bootstrap\NavBar;
  AppAsset::register($this);
  $this->registerLinkTag([
    'rel' => 'icon',
    'type' => 'image/png',
    'href' => '/web/favicon.ico'
  ]);
?>
<?php $this -> beginPage(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="IICgeNI6eTMRaObg0uJajcrpSIauVvFUz4oUBtx2Bg8" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127818267-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-127818267-1');
    </script>
    <title>Uber Ukraine Cab</title>
    <?php $this -> head(); ?>
  </head>
  <body>
    <?php $this -> beginBody(); ?>
    <header class="basic-header c-white">
      <?php if (Yii::$app -> session -> hasFlash('success')) :?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?= Yii::$app -> session -> getFlash('success'); ?>
        </div>
      <?php endif; ?>
      <?php if (Yii::$app -> session -> hasFlash('error')) :?>
      <div class="alert alert-danger alert-dismissible" role="alert">
        <?= Yii::$app -> session -> getFlash('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php endif; ?>
      <nav>
        <div class="container">
          <div class="row text-center">
            <a href="/landing">
              <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                <img id="logo" class="logo" src="/images/logo.png" alt="logo">
              </div>
            </a>
            <div class="col-lg-8 col-md-7 hidden-xs hidden-sm">
              <ul class="mt-25 nav-menu-titles font-to-titles">
                <li><a href="/landing/#guarantees">Преимущества</a></li>
                <li><a href="/landing/#about_us">О нас</a></li>
                <li><a href="/landing/#requirements">Требования</a></li>
                <li><a href="/landing/#contacts">Контакты</a></li>
                <li><a href="/landing/benefit">Выгода системы убер</a></li>
                <li><a href="/landing/#faq">Вопросы</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-3 hidden-xs hidden-sm">
              <div class="mt-15 fs-19">
                <i class="glyphicon glyphicon-earphone"></i>
                <a href="tel:+380994790063">+380994790063</a>
                <br>
                <i class="glyphicon glyphicon-earphone"></i>
                <a href="tel:+380965968909">+380965968909</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 navbar-xs-sm hidden-md hidden-lg">
              <?php
                NavBar::begin([
                  'brandLabel' => '<img id="logo" class="logo" src="/images/logo.png" alt="logo">',
                  'brandUrl' => Yii::$app->homeUrl,
                  'renderInnerContainer'=>false,
                  'options' => [
                    'class' => 'navbar-inverse',
                  ],
                ]);
                echo Nav::widget([
                  'options' => ['class' => 'navbar-nav'],
                  'items' => [
                    '<li><a href="/landing/index/#guarantees">Преимущества</a></li>',
                    '<li><a href="/landing/index/#about_us">О нас</a></li>',
                    '<li class="hidden-sm"><a href="/landing/index/#requirements">Требования</a></li>',
                    '<li><a href="/landing/index/#contacts">Контакты</a></li>',
                    '<li><a href="/landing/benefit">Выгода системы убер</a></li>',
                    '<li><a href="/landing/index/#faq">Вопросы</a></li>',
                    '<li class="hidden-sm">
                      <a href="tel:+380994790063">
                        <i class="glyphicon glyphicon-earphone"></i>
                        <b>+380994790063</b>
                      </a>
                    </li>',
                    '<li class="hidden-sm">
                      <a href="tel:+380965968909">
                        <i class="glyphicon glyphicon-earphone"></i>
                        <b>+380965968909</b>
                      </a>
                    </li>'
                  ],
                ]);
                NavBar::end();
              ?>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-40">
            <b class="fs-36 font-to-titles">Как начать работать с Uber</b>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2"></div>
          <div class="col-xs-8 col-sm-8 col-md-8 mt-15">
            <span class="fs-20 fs-o font-to-text">
              Uber - доверенный партнер компании Uber в Украине.
              Для того, чтобы начать работать, отправляйте заявку через форму,
              что расположена ниже. В ближайшее время с Вами свяжется наш представитель
              для онлайн активации
            </span>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-43 mb-44">
            <b class="fs-23 font-to-titles">Оставьте заявку и мы вам перезвоним:</b>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 text-center">
            <button type="button" id="btn_new_worker" class="ff-p btn-new-worker-change-partner mb-30">Стать водителем</button>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 text-center">
            <button type="button" id="btn_partner" class="ff-p btn-new-worker-change-partner change-partner mb-30">Сменить партнера</button>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="content">
        <?= $this->render ('./modal-forms/modalFormWorker.php'); ?>
        <?= $this->render ('./modal-forms/modalFormPartner.php'); ?>
        <?= $content ?>
      </div>
    </main>
    <footer>
      <div class="container">
        <div class="row">
          <a href="/landing">
            <div class="col-lg-1 col-md-2">
                <img id="logo" src="/images/logo.png" alt="logo">
            </div>
          </a>
          <div class="col-lg-9 col-md-7">
            <ul class="mt-25 font-to-titles">
              <li><a href="/landing/#guarantees">Преимущества</a></li>
              <li><a href="/landing/#about_us">О нас</a></li>
              <li><a href="/landing/#requirements">Требования</a></li>
              <li><a href="/landing/#contacts">Контакты</a></li>
              <li><a href="/landing/benefit">Выгода системы убер</a></li>
              <li><a href="/landing/#faq">Вопросы</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 number-footer">
            <div class="mt-10 fs-22 font-to-titles">
                <i class="glyphicon glyphicon-earphone"></i>
                <a href="tel:+380994790063">+380994790063</a>
                <br>
                <i class="glyphicon glyphicon-earphone"></i>
                <a href="tel:+380965968909">+380965968909</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 app-links mb-30 mt-20">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.ubercab.driver&hl=ru">
              <img src="/images/play.png" alt="">
            </a>
            <a class="ml-25" target="_blank" href="https://itunes.apple.com/ru/app/uber-driver-%D0%B4%D0%BB%D1%8F-%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B5%D0%B9/id1131342792?mt=8">
              <img src="/images/appstore.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </footer>
    <?php $this -> endBody(); ?>
  </body>
  <?php $this -> endPage(); ?>
</html>
