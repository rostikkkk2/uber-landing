<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class LandingController extends Controller {
  public function actionIndex() {
    return $this -> render('landing');
  }
}

 ?>
