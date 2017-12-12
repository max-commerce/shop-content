<?php

namespace maxcom\content\controllers;

use yii\web\Controller;
use yii\base\ViewNotFoundException;

/**
 * View controller
 */
class PageController extends Controller
{

    /**
     * Displays page.
     *
     * @return mixed
     */
    public function actionView($page)
    {
        $params = [
            'page' => $page
        ];
        try
        {
            return $this->render('view--' . $page->alias, $params);
        }
        catch (ViewNotFoundException $e)
        {
            return $this->render('view', $params);
        }

    }
}
