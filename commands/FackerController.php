<?php

namespace app\commands;
use yii\console\Controller;
use app\models\NewWorker;
use app\models\Partner;
use Faker\Factory;

class FackerController extends Controller {
  public function actionCreateWorker($categorys_number = 1) {
    $faker = Factory::create();
    for ($i=1; $i < 140 ; $i++) {
      $list = new NewWorker();
      $list -> id = $i;
      $list -> name = $faker -> word;
      $list -> phone_number = '80636472129';
      $list -> name_car = $faker -> word;
      $list -> year_born_car = 1995;
      $list -> city = 'Днепр';
      $list -> save(false);
    }
  }
  public function actionCreatePartner($categorys_number = 1) {
    $faker = Factory::create();
    for ($i=1; $i < 140 ; $i++) {
      $list = new Partner();
      $list -> id = $i;
      $list -> name = $faker -> word;
      $list -> phone_number = '80636472129';
      $list -> email = 'test@test.com';
      $list -> city = 'Днепр';
      $list -> save(false);
    }
  }
}
?>