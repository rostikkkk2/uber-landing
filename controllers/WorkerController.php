<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\NewWorker;
use Yii;

class WorkerController extends Controller {
  public function actionCreate() {
    $model = new NewWorker();
    // $model -> load(Yii::$app -> request -> post());
    // if ($model -> validate()) {
      // $model -> name =
      // Yii::$app -> session -> setFlash('success', 'ваша заявка принята');
      // return $this -> goHome();
    // }
  }
}



 ?>
