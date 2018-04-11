<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Translation;

class TranslateController extends Controller
{
    public function actionTranslation()
    {
        if(isset($_GET['keyword'])) {    
            $text = $_GET['keyword'];
            
            $model = new Translation();
            return $model->googleTranslateApi($text);
        }
    }
}
