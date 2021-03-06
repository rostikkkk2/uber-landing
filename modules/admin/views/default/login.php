<?php
$this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Админ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-center">
  <h1>Вход</h1>
  <?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
      'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-3\">{error}</div>",
      'labelOptions' => ['class' => 'col-lg-offset-3 col-lg-1 control-label'],
    ],
  ]); ?>
  <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
  <?= $form->field($model, 'password')->passwordInput() ?>
  <?= $form->field($model, 'rememberMe')->checkbox([
    'template' => "<div class=\"col-lg-offset-2 col-lg-6\">{input} {label}</div>\n<div class=\"col-lg-12\">{error}</div>",
    ]) ?>
  <div class="form-group">
    <div class="col-lg-12">
      <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
  </div>
  <?php ActiveForm::end(); ?>
</div>
