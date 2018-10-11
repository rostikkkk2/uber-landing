<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\NewWorker;
AppAsset::register($this);
?>


<div id="worker" class="worker-partner-modal-form modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Стать водителем Uber</h4>
      </div>
      <div class="modal-body">
        <?php $new_worker = new NewWorker(); ?>
        <?php $form_new_worker = ActiveForm::begin([
          'action' => ['landing/newworker'],
          'method' => 'post',
          'options' => ['class' => 'form-worker'],
        ]); ?>
        <?= $form_new_worker -> field($new_worker, 'name') -> textInput(['class' => 'input-name', 'placeholder' => 'Имя']) -> label('Имя'); ?>
        <?= $form_new_worker -> field($new_worker, 'phone_number') -> textInput(['class' => 'input-name', 'placeholder' => 'Телефон']) -> label('Телефон'); ?>
        <?= $form_new_worker -> field($new_worker, 'name_car') -> textInput(['class' => 'input-name', 'placeholder' => 'Марка машины']) -> label('Марка машины'); ?>
        <?= $form_new_worker -> field($new_worker, 'year_born_car') -> textInput(['class' => 'input-name', 'placeholder' => 'Год выпуска']) -> label('Год выпуска'); ?>
        <?= $form_new_worker -> field($new_worker, 'city') -> dropDownList([
          'Днепр' => 'Днепр',
          'Киев' => 'Киев',
          'Запорожье' => 'Запорожье'
        ]) -> label('Город');
        ?>
      </div>
      <div class="modal-footer text-center">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-submit-worker-partner']); ?>
        <?php $form_new_worker = ActiveForm::end();?>
      </div>
    </div>
  </div>
</div>
