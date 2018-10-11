<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\NewWorker;
use app\models\Partner;
use Yii;

class LandingController extends Controller {
  public function actionIndex() {
    return $this -> render('landing');
  }

  public function actionNewworker() {
    $request = Yii::$app -> request;
    if ($request -> isPost) {
      $model = new NewWorker();
      $model -> name = $request -> post('NewWorker')['name'];
      $model -> phone_number = $request -> post('NewWorker')['phone_number'];
      $model -> name_car = $request -> post('NewWorker')['name_car'];
      $model -> year_born_car = $request -> post('NewWorker')['year_born_car'];
      $model -> city = $request -> post('NewWorker')['city'];
      $model -> date = Yii::$app -> formatter -> asDate('now', 'yyyy-MM-dd');
      if($model -> save()){
        Yii::$app -> session -> setFlash('success', 'Ваш запрос отправлен');
      }else {
        Yii::$app -> session -> setFlash('error', 'Ваш запрос не отправлен');
      }
      return $this -> redirect(['landing/index']);
    }
  }

  public function actionChangepartner() {
    $request = Yii::$app -> request;
    if ($request -> isPost) {
      $model = new Partner();
      $model -> name = $request -> post('Partner')['name'];
      $model -> phone_number = $request -> post('Partner')['phone_number'];
      $model -> email = $request -> post('Partner')['email'];
      $model -> city = $request -> post('Partner')['city'];
      $model -> date = Yii::$app -> formatter -> asDate('now', 'yyyy-MM-dd');
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
