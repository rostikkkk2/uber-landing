<?php
  use app\assets\AppAsset;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\controllers\WorkerController;
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
    <?php $this -> beginBody(); ?>
    <header class="c-white">
      <nav>
        <div class="container">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
              <h1 class="">uber</h1>
            </div>
            <div class="col-md-4">
              <ul class="mt-25">
                <li>Гарантии</li>
                <li>Требования</li>
                <li>О нас</li>
              </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <div class="mt-24 fs-22">
                <i class="glyphicon glyphicon-earphone"></i>
                (098)<b>3432725</b>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mt-50">
            <b class="fs-36">Как начать работать с Uber</b>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 mt-15">
            <span class="fs-20">
              Uber - доверенный партнер компании Uber в Украине.
              Для того, чтобы начать работать, отправляйте заявку через форму,
              что расположена ниже. В ближайшее время с Вами свяжется наш представитель
              для онлайн активации
            </span>
          </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center mt-34">
            <b class="fs-23">Оставьте заявку и мы вам перезвоним:</b>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php $form_new_worker = ActiveForm::begin([
              'action' => '/worker/create',
              'method' => 'post',
              'options' => ['class' => 'form-new-worker'],
            ]); ?>
            <!-- <? $form_new_worker -> field($model, 'name') -> textInput(['class' => 'input-name', 'placeholder' => 'Имя']) -> label(false); ?> -->
            <button type="submit" class="">Отправить</button>
            <?php $form_new_worker = ActiveForm::end();?>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="content">
        <?php if (Yii::$app -> session -> hasFlash('success')) :?>
          <div class="alert alert-success alert-dismissible mt-20" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?= Yii::$app -> session -> getFlash('success'); ?>
          </div>
        <?php endif; ?>
        <?php if (Yii::$app -> session -> hasFlash('error')) :?>
        <div class="alert alert-danger alert-dismissible mt-20" role="alert">
          <?= Yii::$app -> session -> getFlash('error'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php endif; ?>
        <?= $content ?>
      </div>
    </main>
    <footer>

    </footer>
    <?php $this -> endBody(); ?>
  </body>
  <?php $this -> endPage(); ?>
</html>
