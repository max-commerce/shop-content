<?php

namespace maxcom\content\widgets;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\widgets\Menu;
use maxcom\content\models\Page;

class PageMenuWidget extends Widget
{

  public $items;

  public function init() {
    
    $pages = Page::find()->all();

    $this->items = ArrayHelper::toArray($pages, [
      'maxcom\content\models\Page' => [
        'label' => 'title',
        'url' => function ($page) {
          return $page->url;
        },
      ]
    ]);

  }

  public function run() {

    if ($this->items) {
      echo Menu::widget([
          'options' => [
            'class' => 'list-group',
          ],
          'itemOptions' => [
            'class' => 'list-group-item',
          ],
          'items' => $this->items
      ]);
    }

  }

}