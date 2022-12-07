<?php

namespace app\controllers;

use yii\web\Controller;


class ShopController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays item.
     *
     * @return string
     */
    public function actionItem()
    {
        return $this->render('item');
    }

}
