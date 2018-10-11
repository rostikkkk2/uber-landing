<?php

namespace app\models;

use Yii;

class Partner extends \yii\db\ActiveRecord {

    public static function tableName() {
        return 'partner';
    }

    public function rules() {
        return [
            [['name', 'phone_number', 'email', 'city', 'date'], 'required'],
            [['phone_number'], 'integer'],
            [['date'], 'safe'],
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
