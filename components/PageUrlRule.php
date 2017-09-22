<?php

namespace maxcom\content\components;

use yii\web\UrlRuleInterface;
use yii\base\Object;
use maxcom\content\models\Page;

class PageUrlRule extends Object implements UrlRuleInterface
{

    public function createUrl($manager, $route, $params)
    {
        return false; // this rule does not apply
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        
        if ($page = Page::find()->where(['alias' => $pathInfo])->one()) {
            return ['page/view/default', ['page' => $page]];
        }

        
        return false; // this rule does not apply
    }
}