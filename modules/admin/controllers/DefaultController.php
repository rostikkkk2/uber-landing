<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\modules\admin\models\LoginForm;
use app\modules\admin\models\ContactForm;

class DefaultController extends Controller {
  public function actionIndex() {
    $this->layout = 'main';
    if (!Yii::$app->user->isGuest) {
      return $this->redirect('/admin/list');
    }
    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
      return $this->redirect('/admin/list');
    }
    $model->password = '';
    return $this->render('login', [
      'model' => $model,
    ]);
  }
  public function actionLogout() {
    Yii::$app->user->logout();
    return $this->goHome();
  }
}
