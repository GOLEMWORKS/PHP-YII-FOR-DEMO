<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex() {
        $query = Country::find();
        $countries = $query->orderBy('name')->all();
        return $this->render('index', ['countries'=>$countries]);
    }
}