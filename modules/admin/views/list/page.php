<?php
$this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<div class="row mt-120">
  <?php foreach ($lists as $list): ?>
    <tr>
      <td><?= $list -> id ?></td>
      <td><?= $list -> name ?></td>
      <td><?= $list -> phone_number ?></td>
      <td><?= $list -> name_car ?></td>
      <td><?= $list -> year_born_car ?></td>
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
    <p></p>
</div>
