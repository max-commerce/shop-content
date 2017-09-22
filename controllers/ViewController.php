<?php

namespace maxcom\content\controllers;

use yii\web\Controller;

/**
 * View controller
 */
class ViewController extends Controller
{

    /**
     * Displays page.
     *
     * @return mixed
     */
    public function actionDefault($page)
    {
        return $this->render('/view', [
            'page' => $page
        ]);
    }
}
