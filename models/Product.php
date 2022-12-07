<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

}