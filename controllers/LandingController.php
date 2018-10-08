<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\NewWorker;
use Yii;

class LandingController extends Controller {
  public function actionIndex() {
    return $this -> render('landing');
  }

  public function actionCreate() {
    $request = Yii::$app -> request;
    if ($request -> isPost) {
      $model = new NewWorker;
      $model -> name = $request -> post('NewWorker')['name'];
      $model -> phone_number = $request -> post('NewWorker')['phone_number'];
      $model -> name_car = $request -> post('NewWorker')['name_car'];
      $model -> year_born_car = $request -> post('NewWorker')['year_born_car'];
      if($model -> save()){
        Yii::$app -> session -> setFlash('success', 'Ваш запрос отправлен');
      }else {
        Yii::$app -> session -> setFlash('error', 'Ваш запрос не отправлен');
      }
      return $this -> redirect(['landing/index']);
    }

  }
}

 ?>
