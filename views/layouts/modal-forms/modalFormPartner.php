<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Partner;
AppAsset::register($this);
?>

<div id="partner" class="worker-partner-modal-form modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Сменить партнера Uber</h4>
      </div>
      <div class="modal-body">
        <?php $partner = new Partner(); ?>
        <?php $form_partner = ActiveForm::begin([
          'action' => ['landing/changepartner'],
          'method' => 'post',
          'options' => ['class' => 'form-partner'],
        ]); ?>
        <?= $form_partner -> field($partner, 'name') -> textInput(['class' => 'input-name', 'placeholder' => 'Имя']) -> label('Имя'); ?>
        <?= $form_partner -> field($partner, 'phone_number') -> textInput(['class' => 'input-name', 'placeholder' => 'Телефон']) -> label('Телефон'); ?>
        <?= $form_partner -> field($partner, 'email') -> textInput(['class' => 'input-name', 'placeholder' => 'Email']) -> label('Email'); ?>
        <?= $form_partner -> field($partner, 'city') -> dropDownList([
          'Днепр' => 'Днепр',
          'Киев' => 'Киев',
          'Запорожье' => 'Запорожье',
          'Харьков' => 'Харьков',
          'Одесса' => 'Одесса',
          'Кривой Рог' => 'Кривой Рог',
          'Львов' => 'Львов',
          'Винница' => 'Винница',
          'Николаев' => 'Николаев',
          'Мариуполь' => 'Мариуполь',
          'Чернигов' => 'Чернигов',
          'Херсон' => 'Херсон',
          'Полтава' => 'Полтава',
          'Житомир' => 'Житомир',
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
