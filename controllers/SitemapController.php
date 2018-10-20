<?php

namespace app\controllers;
use yii\web\Controller;

class SitemapController extends Controller {

  public function actionIndex() {
    return $this -> render('index.xml');
  }
}