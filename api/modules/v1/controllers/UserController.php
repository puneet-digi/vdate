<?php

namespace app\modules\v1\controllers;

use Yii;
use app\modules\v1\controllers\ApiController;
use common\models\User;
use common\models\LoginForm;

/**
 * User Controller API
 *
 * @author Puneeet Sethi <deerawan@gmail.com>
 */
class UserController extends ApiController {

  public $modelClass = '\common\models\User';

  public function actionList() {
    $user = new \common\models\User();
  }

  public function actionSignup() {
    $user = new \common\models\User();
    $user->load(\Yii::$app->request->post());
    $user->setPassword(\Yii::$app->request->post('User')['password']);
    $user->validate();
    if (!$user->save()) {
      $this->error = $user->getErrors();
    } else {
      $this->data = $user->getAttributes();
    }
    return $this->returnResponse();
  }
  
  /**
   * Login action.
   *
   * @return string
   */
  public function actionLogin() {
    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
      //logged in
      $this->data = $model->user->getAttributes();
    } else {
      // failed
      $this->error = $model->getErrors();
    }
    return $this->returnResponse();
  }

}
