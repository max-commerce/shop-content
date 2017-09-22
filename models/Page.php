<?php

namespace maxcom\content\models;
use yii\helpers\Url;
use yii;

class Page extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'shop_page';
    }

    public function getUrl(){
        return Url::to(['/' . $this->alias]);
    }
}