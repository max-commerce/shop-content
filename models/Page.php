<?php

namespace maxcom\content\models;
use yii\helpers\Url;
use yii;

class Page extends \yii\db\ActiveRecord
{
    public static function tableName()
    {

    	if (Yii::$app->db->schema->getTableSchema('shop_page') !== null) {
    		// maxcommerce v.1 implementation
        	return 'shop_page';
    	} elseif (Yii::$app->db->schema->getTableSchema('pages') !== null) {
    		// maxcommerce v.2 implementation
			return 'pages';
    	} else {
    		throw new ErrorException("Can't find `pages` table");
    	}
    }

    public function getUrl(){
        return Url::to(['/' . $this->alias]);
    }

    public function getText(){

		// maxcommerce v.2 implementation
    	if ($this->hasAttribute('content')) {
        	return $this->content;
        }
    }

}