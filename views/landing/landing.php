<?php
  $this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php require(__DIR__ . '/guarantees.php'); ?>
      <?php require(__DIR__ . '/requirement.php'); ?>
      <?php require(__DIR__ . '/faq.php'); ?>
    </div>
  </div>
</div>
