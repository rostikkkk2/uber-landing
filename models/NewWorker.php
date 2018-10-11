<?php

namespace app\models;

use Yii;

class NewWorker extends \yii\db\ActiveRecord {

    public static function tableName()
    {
        return 'worker';
    }

    public function rules() {
        return [
            [['name', 'phone_number', 'name_car', 'year_born_car', 'city', 'date'], 'required'],
            [['phone_number', 'year_born_car'], 'integer'],
            [['date'], 'safe'],
            [['name', 'name_car', 'city'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'имя',
            'phone_number' => 'телефон',
            'name_car' => 'марка машины',
            'year_born_car' => 'выпуск мышины',
            'city' => 'город',
            'date' => 'Date',
        ];
    }
}
