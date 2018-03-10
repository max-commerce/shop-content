<?php

namespace maxcom\content\components;

use yii\web\UrlRuleInterface;
use yii\base\BaseObject;
use maxcom\content\models\Page;

class PageUrlRule extends BaseObject implements UrlRuleInterface
{

    public function createUrl($manager, $route, $params)
    {
        return false; // this rule does not apply
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        
        // проверка на главную страницу (пустой alias)
        if (!empty($pathInfo)) {

            if ($page = Page::find()->where(['alias' => $pathInfo])->one()) {
                return ['content/page/view', ['page' => $page]];
            }
        }

        
        return false; // this rule does not apply
    }
}