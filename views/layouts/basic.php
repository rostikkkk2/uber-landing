<?php
  use app\assets\AppAsset;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\models\NewWorker;
  use app\models\Partner;
  use yii\bootstrap\Nav;
  use yii\bootstrap\NavBar;
  AppAsset::register($this);
?>
<?php $this -> beginPage(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uber-landing</title>
    <?php $this -> head(); ?>
  </head>
  <body>
    <header class="basic-header c-white">
      <?php $this -> beginBody(); ?>
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
          <div class="row">
            <div class="hidden-sm hidden-xs col-md-2 ">
              <img id="logo" src="/images/logo.png" alt="logo">
            </div>
            <div class="col-md-8 hidden-xs hidden-sm">
              <ul class="mt-25 nav-menu-titles">
                <li><a href="#guarantees">Преимущества</a></li>
                <li><a href="#requiremets">Требования</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Вопросы</a></li>
              </ul>
            </div>
            <div class="hidden-xs col-sm-5 col-md-2">
              <div class="mt-27 fs-19">
                <i class="glyphicon glyphicon-earphone"></i>
              <a href="tel:+380983432725"><b>0983432725</b></a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 text-right hidden-md hidden-lg">
              <!-- <div class="dropdown show">
                <button class="btn back-none btn-secondary mt-15 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="glyphicon glyphicon-align-justify fs-25"></i>
                </button>
                <div class="dropdown-menu nav-btns-menu-phone" aria-labelledby="dropdownMenuLink">
                  <div class="drop-menu-item">
                    <a href="#guarantees">Преимущества</a><br>
                  </div>
                  <div class="drop-menu-item">
                    <a class="" href="#requiremets">Требования</a></br>
                  </div>
                  <div class="drop-menu-item">
                    <a class="" href="#">О нас</a></br>
                  </div>
                  <div class="drop-menu-item">
                    <a class="" href="#">Контакты</a></br>
                  </div>
                  <div class="drop-menu-item">
                    <a class="" href="#">Вопросы</a></br>
                  </div>
                  <div class="text-center fs-18">
                    <i class="glyphicon glyphicon-earphone"></i>
                    <a class="" href="tel:+380983432725"><b>0983432725</b></a>
                  </div>
                </div>
              </div> -->
              <?php
        NavBar::begin([
          'brandLabel' => '<img id="logo" src="/images/logo.png" alt="logo">',
          'brandUrl' => Yii::$app->homeUrl,
          'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
          ],
        ]);
        echo Nav::widget([
          'options' => ['class' => 'navbar-nav nav-menu-to-phone navbar-right'],
          'items' => [
            '<li><a href="#guarantees">' . 'Преимущества' . '</a></li>',
            '<li><a href="#">' . 'Требования' . '</a></li>',
            '<li><a href="#">' . 'О нас' . '</a></li>',
            '<li><a href="#">' . 'Контакты' . '</a></li>',
            '<li><a href="#">' . 'Вопросы' . '</a></li>'
          ],
        ]);
        NavBar::end();
      ?>

              </div>
            </div>
          </nav>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-40">
            <b class="fs-36 fs-i">Как начать работать с Uber</b>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2"></div>
          <div class="col-xs-8 col-sm-8 col-md-8 mt-15">
            <span class="fs-20 fs-o">
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
            <b class="fs-23">Оставьте заявку и мы вам перезвоним:</b>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 text-center">
            <button type="button" id="btn_new_worker" class="btn-new-worker-change-partner mb-30">Стать водителем</button>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 text-center">
            <button type="button" id="btn_partner" class="btn-new-worker-change-partner change-partner mb-30">Сменить партнера</button>
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
    <footer class="mt-25">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <p class="fs-18 mt-25 c-white">uberUKRAINE_Cab</p>
          </div>
          <div class="col-md-7">
            <ul class="mt-25">
              <li><a href="#guarantees">Преимущества</a></li>
              <li><a href="#requiremets">Требования</a></li>
              <li>О нас</li>
              <li>Контакты</li>
              <li>Вопросы</li>
            </ul>
          </div>
          <div class="col-md-3 number-footer">
            <div class="mt-22 fs-22">
              <i class="c-white glyphicon glyphicon-earphone fs-18"></i>
              <a href="tel:+380983432725"><b>0983432725</b></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30 mt-20">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.ubercab.driver&hl=ru">
              <img src="images/play.png" alt="">
            </a>
            <a class="ml-25" target="_blank" href="https://itunes.apple.com/ru/app/uber-driver-%D0%B4%D0%BB%D1%8F-%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B5%D0%B9/id1131342792?mt=8">
              <img src="images/appstore.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </footer>
    <?php $this -> endBody(); ?>
  </body>
  <?php $this -> endPage(); ?>
</html>
