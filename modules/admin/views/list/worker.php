<?php
$this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<h1 class="text-center mt-100">Новые заявки на работу</h1>
<table class="table">
  <thead>
    <tr>
      <th>Имя</th>
      <th>Телефон</th>
      <th>Модель машины</th>
      <th>Год выпуска</th>
      <th>Дата</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($lists as $list): ?>
      <tr>
        <td><?= $list -> name ?></td>
        <td><a href="tel:0<?= $list -> phone_number?>"><?="0" . $list -> phone_number ?></a></td>
        <td><?= $list -> name_car ?></td>
        <td><?= $list -> year_born_car ?></td>
        <td><?= $list -> datetime ?></td>
        <td>
          <?php
          $drop = ActiveForm::begin([
            'action' => ['list/delete-worker/' . $list->id],
            'method' => 'post',
          ]);
          ?>
          <?=HTML::submitButton('Delete', ['class' => 'btn btn-success']); ?>
          <?php $drop = ActiveForm::end(); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
