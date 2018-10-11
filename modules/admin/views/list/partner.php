<?php
$this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<h1 class="text-center mt-100">Новые заявки на смену партнера</h1>
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
      <?php
      $drop_all = ActiveForm::begin([
        'action' => ['list/delete-all'],
        'method' => 'post',
      ]);
      ?>
      <?=HTML::submitButton('Delete-All', ['class' => 'btn btn-success']); ?>
      <?php $drop_all = ActiveForm::end(); ?>
      <?php foreach ($lists as $list): ?>
        <tr>
          <td><?= $list -> name ?></td>
          <td><?= $list -> phone_number ?></td>
          <td><?= $list -> name_car ?></td>
          <td><?= $list -> year_born_car ?></td>
          <td>data</td>
          <td>
            <?php
            $drop = ActiveForm::begin([
              'action' => ['list/delete/' . $list->id],
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
