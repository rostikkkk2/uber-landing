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
      <th>Email</th>
      <th>Дата</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($lists as $list): ?>
        <tr>
          <td><?= $list -> name ?></td>
          <td><?= $list -> phone_number ?></td>
          <td><?= $list -> email ?></td>
          <td><?= $list -> datetime ?></td>
          <td>
            <?php
            $drop = ActiveForm::begin([
              'action' => ['list/delete-partner/' . $list->id],
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
