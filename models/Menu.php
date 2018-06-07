<?php

namespace maxcom\content\models;

use Yii;

class Menu extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'shop_menu';
    }

    public function getItems()
    {
        return $this->hasMany(MenuItem::class, ['menu_id'=> 'id']);
    }
}
