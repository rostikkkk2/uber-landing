<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\NewWorker;
use app\models\Partner;

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
    return $this -> render('worker', compact('lists'));
  }

  public function actionPartner() {
    $this->layout = 'main';
    $lists = Partner::find() -> all();
    return $this -> render('partner', compact('lists'));    
  }

  public function actionDeleteWorker($id) {
    NewWorker::findOne($id) -> delete();
    return $this -> redirect('/admin/list');
  }

  public function actionDeletePartner($id) {
    Partner::findOne($id) -> delete();
    return $this -> redirect('/admin/list/partner');
  }
}
