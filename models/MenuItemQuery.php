<?php

namespace maxcom\content\models;
use Yii;

class MenuItemQuery extends \yii\db\ActiveQuery
{
    public function init()
    {
        parent::init();
        $this->orderBy(['weight' => SORT_ASC]);
    }
}
