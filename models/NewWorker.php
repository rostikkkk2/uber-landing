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
            [['name', 'phone_number', 'name_car', 'year_born_car', 'city'], 'required'],
            ['phone_number', 'match', 'pattern' => '/^(8)(\d{3})(\d{3})(\d{2})(\d{2})/', 'message' => 'Телефона, должно быть в формате "80931234567"'],
            ['year_born_car', 'match', 'pattern' => '/^(\d{4})/', 'message' => 'Год выпуска, должно быть в формате "2018"'],
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
