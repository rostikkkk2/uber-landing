<?php

namespace app\models;

use Yii;

class Partner extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'partner';
    }

    public function rules() {
        return [
            [['name', 'phone_number', 'email', 'city'], 'required'],
            ['phone_number', 'match', 'pattern' => '/^(0)(\d{2})(\d{3})(\d{2})(\d{2})/', 'message' => 'Телефона, должно быть в формате "0931234567"'],
            ['email', 'email'],
            [['name', 'email', 'city'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'имя',
            'phone_number' => 'телефон',
            'email' => 'Email',
            'city' => 'город',
            'date' => 'Date',
        ];
    }
}
