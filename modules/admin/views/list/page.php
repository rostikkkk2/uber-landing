<?php
$this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>phone_number</th>
      <th>name_car</th>
      <th>year_born_car</th>
      <th>data</th>
    </tr>
  </thead>
  <tbody>
    <div class="row mt-120">
      <?php foreach ($lists as $list): ?>
        <tr>
          <td><?= $list -> id ?></td>
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
    </div>
  </tbody>
</table>
