<?php
  $this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<div class="container-fluid margin-15 padding-0">
  <div class="row">
    <div class="col-md-12">
      <div class="container">
        <?= $this->render('guarantees.php'); ?>
      </div>
      <div class="container-fluid padding-0">
        <?= $this->render('about_us.php') ?>
      </div>
      <div class="container">
        <?= $this->render('requirement.php'); ?>
      </div>
        <?= $this->render('contacts.php') ?>
      <div class="container">
        <?= $this->render('faq.php'); ?>
      </div>
    </div>
  </div>
</div>
