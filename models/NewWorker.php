<?php

namespace app\models;
use app\controllers\WorkerController;
use Yii;

class NewWorker extends \yii\db\ActiveRecord {


  public static function tableName() {
    return 'new_worker';
  }

  public function rules() {
    return [
        [['name', 'name_car', 'year_born_car'], 'required'],
        [['year_born_car'], 'safe'],
        [['name', 'name_car'], 'string', 'max' => 50],
    ];
  }

  public function attributeLabels() {
    return [
        'id' => 'ID',
        'name' => 'Name',
        'name_car' => 'Name Car',
        'year_born_car' => 'Year Born Car',
    ];
  }
}
