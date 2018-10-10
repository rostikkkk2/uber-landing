<?php

namespace app\commands;
use yii\console\Controller;
use app\models\NewWorker;
use Faker\Factory;

class FackerController extends Controller {
  public function actionCreateWorker($categorys_number = 1) {
    $faker = Factory::create();
    for ($i=1; $i < 140 ; $i++) {
      $list = new NewWorker();
      $list -> id = $i++;
      $list -> name = $faker -> word;
      $list -> phone_number = '0636472129';
      $list -> name_car = $faker -> word;
      $list -> year_born_car = 1995;
      $list -> save(false);
    }
  }
}
?>