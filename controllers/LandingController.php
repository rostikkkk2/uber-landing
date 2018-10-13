<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\NewWorker;
use app\models\Partner;
use Yii;

class LandingController extends Controller {
  
  const API_URL = 'https://api.telegram.org/bot613198799:AAH_BQmDYScD78TV3AApjnPdqYMfR5NvO18/';

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
      $message = 'Новый отклик на сайте: ' . 
      'Имя: ' . $request -> post('NewWorker')['name'] . ', ' . 
      'Телефон: ' . $request -> post('NewWorker')['phone_number'] . ', ' . 
      'Марка машины: ' . $request -> post('NewWorker')['name_car'] . ', ' . 
      'Год выпуска: ' . $request -> post('NewWorker')['year_born_car'];
      $model -> city = $request -> post('NewWorker')['city'];
      $model -> date = Yii::$app -> formatter -> asDate('now', 'yyyy-MM-dd');
      if($model -> save()){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::API_URL . "sendMessage?chat_id=286979119&text={$message}");
        curl_exec($curl);
        curl_setopt($curl, CURLOPT_URL, self::API_URL . "sendMessage?chat_id=384922121&text={$message}");
        curl_exec($curl);
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
