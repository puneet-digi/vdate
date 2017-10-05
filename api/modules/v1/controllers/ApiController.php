<?php

namespace app\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\filters\auth\CompositeAuth;
use yii\filters\ContentNegotiator;
use yii\filters\RateLimiter;
use yii\filters\VerbFilter;

/**
 * Default controller for the `restful` module
 */
class ApiController extends ActiveController {

  public $data;
  public $error;

  /**
   * @inheritdoc
   */
  public function behaviors() {
    return [
      'contentNegotiator' => [
        'class' => ContentNegotiator::className(),
        'formats' => [
          'application/json' => Response::FORMAT_JSON,
        //'application/xml' => Response::FORMAT_XML,
        ],
      ]
    ];
  }

  /**
   * Renders the index view for the module
   * @return string
   */
  public function actionIndex() {
    echo "here we are at the Base";
    exit;
  }

  public function success() {
    return ['success' => true, 'data' => $this->data];
  }

  public function fail() {
    return ['success' => false, 'error' => $this->error];
  }
  
  public function returnResponse()
  {
    return (isset($this->error) ? $this->fail() : $this->success());
  }

}
