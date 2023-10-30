<?php
namespace app\controllers\admin;

use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex(){
        return $this->render('index');
    }

}