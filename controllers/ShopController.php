<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Product;


class ShopController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Product::find();

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);

        $products = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'products' => $products,
            'pagination' => $pagination,
        ]);
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
