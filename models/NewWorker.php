<?php

namespace app\models;

use Yii;

class NewWorker extends \yii\db\ActiveRecord {

  public static function tableName() {
    return 'new_worker';
  }

  public function rules() {
    return [
        [['name', 'phone_number', 'name_car', 'year_born_car'], 'required'],
        [['phone_number', 'year_born_car'], 'integer'],
        [['name', 'name_car'], 'string', 'max' => 50],
    ];
  }

  public function attributeLabels() {
    return [
        'id' => 'ID',
        'name' => 'Name',
        'phone_number' => 'Phone Number',
        'name_car' => 'Name Car',
        'year_born_car' => 'Year Born Car',
    ];
  }
}
