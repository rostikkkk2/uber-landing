<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller {
  public function actionIndex() {
    $this->layout = 'admin';
    return $this->render('index');
  }
}
