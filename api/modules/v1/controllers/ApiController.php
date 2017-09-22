<?php

namespace app\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;

/**
 * Default controller for the `restful` module
 */
class ApiController extends ActiveController
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        echo "here we are at the Base";exit;
    }
}