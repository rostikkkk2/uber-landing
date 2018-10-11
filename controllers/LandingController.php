<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\NewWorker;
use Yii;

class LandingController extends Controller {
  
  const API_URL = 'https://api.telegram.org/bot613198799:AAH_BQmDYScD78TV3AApjnPdqYMfR5NvO18/';

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
      $message = 'Новый отклик на сайте: ' . 
      'Имя: ' . $request -> post('NewWorker')['name'] . ', ' . 
      'Телефон: ' . $request -> post('NewWorker')['phone_number'] . ', ' . 
      'Марка машины: ' . $request -> post('NewWorker')['name_car'] . ', ' . 
      'Год выпуска: ' . $request -> post('NewWorker')['year_born_car'];
      if($model -> save()){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::API_URL . "sendMessage?chat_id=286979119&text={$message}");
        curl_exec($curl);
        Yii::$app -> session -> setFlash('success', 'Ваш запрос отправлен');
      }else {
        Yii::$app -> session -> setFlash('error', 'Ваш запрос не отправлен');
      }
      return $this -> redirect(['landing/index']);
    }
  }
}

?>
