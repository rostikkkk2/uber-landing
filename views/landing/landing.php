<?php
  $this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?= $this->render('guarantees.php'); ?>
      <?= $this->render('about_us.php') ?>
      <?= $this->render('requirement.php'); ?>
      <?= $this->render('faq.php'); ?>
    </div>
  </div>
</div>
