<?php
  use app\assets\AppAsset;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\models\NewWorker;
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
    <header>
      header
    </header>
    <main>
      <div class="content">
        <?= $content ?>
      </div>
    </main>
    <footer>
      footer
    </footer>
    <?php $this -> endBody(); ?>
  </body>
  <?php $this -> endPage(); ?>
</html>
