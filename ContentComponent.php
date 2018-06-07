<?php

namespace maxcom\content;

/**
 * ContentComponent
 */
class ContentComponent extends \yii\base\Component
{
    const EVENT_INIT = 'init';

    public $pages;

    public $menus;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        $this->pages = \Yii::createObject([
            'class' => 'maxcom\content\models\Page'
        ]);
        $this->menus = \Yii::createObject([
            'class' => 'maxcom\content\models\Menu'
        ]);

        $this->trigger(self::EVENT_INIT);
    }
}
