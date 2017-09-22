<?php

namespace maxcom\content\controllers;

use yii\web\Controller;

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
        return $this->render('view', [
            'page' => $page
        ]);
    }
}
