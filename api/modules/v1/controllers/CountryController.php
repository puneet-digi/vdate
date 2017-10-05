<?php

namespace app\modules\v1\controllers;

use Yii;
use app\modules\v1\controllers\ApiController;

/**
 * Country Controller API
 *
 * @author Puneeet Sethi <deerawan@gmail.com>
 */

class CountryController extends ApiController
{
	
  public $modelClass = '\common\models\Country';

    
  public function actionList(){
    $country = new \common\models\Country();    
  }

}