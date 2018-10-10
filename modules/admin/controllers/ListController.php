<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\NewWorker;

class ListController extends Controller {
  public  function behaviors() {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'only' => ['index', 'delete'],
        'rules' => [
          [
            'allow' => true,
            'actions' => ['index', 'delete'],
            'roles' => ['@']
          ]
        ]
      ]
    ];
  }

  public function actionIndex() {
    $this->layout = 'main';
      $lists = NewWorker::find() -> all();
    return $this -> render('page', compact('lists'));
  }

  public function actionDelete($id) {
    NewWorker::findOne($id) -> delete();
    return $this -> redirect('/admin/list');
  }
  
}
