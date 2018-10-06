<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class ErrorController extends Controller {
  public function actions() {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
    ];
  }
}

 ?>
