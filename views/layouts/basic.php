<?php
  use app\assets\AppAsset;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
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
    <header>

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
