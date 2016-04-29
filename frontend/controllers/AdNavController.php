<?php

namespace frontend\controllers;

use common\components\Controller;
use common\models\Nav;

class AdNavController extends Controller
{
    public function actionIndex()
    {
        $nav = Nav::find()->orderBy('nav_order asc')->all();
        return $this->render('index', ['nav' => $nav]);
    }
}
