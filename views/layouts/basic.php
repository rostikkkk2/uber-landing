<?php
  use app\assets\AppAsset;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\models\NewWorker;
  use app\models\Partner;
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
            <div class="col-sm-3 col-xs-3 col-md-2 ">
              <h1 class="">uber</h1>
            </div>
            <div class="col-md-8 hidden-xs hidden-sm">
              <ul class="mt-25 nav-menu-titles">
                <li><a href="#guarantees">Преимущества</a></li>
                <li><a href="#requiremets">Требования</a></li>
                <li><a href="#">Вопросы</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
              </ul>
            </div>
            <div class="col-xs-9 col-sm-4 text-center hidden-md hidden-lg">
              <div class="dropdown show">
                <button class="btn back-none btn-secondary mt-15 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="glyphicon glyphicon-align-justify fs-25"></i>
                </button>
                <div class="dropdown-menu nav-btns-menu-phone" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#guarantees">Преимущества</a><br>
                  <a class="dropdown-item" href="#requiremets">Требования</a></br>
                  <a class="dropdown-item" href="#">Вопросы</a></br>
                  <a class="dropdown-item" href="#">О нас</a></br>
                  <a class="dropdown-item" href="#">Контакты</a>
                </div>
              </div>
            </div>
            <div class="hidden-xs col-sm-5 col-md-2">
              <div class="mt-27 fs-19">
                <i class="glyphicon glyphicon-earphone"></i>
                <b>0983432725</b>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-40">
            <b class="fs-36">Как начать работать с Uber</b>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2"></div>
          <div class="col-xs-8 col-sm-8 col-md-8 mt-15">
            <span class="fs-20">
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
        <?php require(__DIR__ . '/modal-forms/modalFormWorker.php'); ?>
        <?php require(__DIR__ . '/modal-forms/modalFormPartner.php'); ?>
        <?= $content ?>
      </div>
    </main>
    <footer>

    </footer>
    <?php $this -> endBody(); ?>
  </body>
  <?php $this -> endPage(); ?>
</html>
