<?php

namespace liyuze\ztree

use yii\base\Widget;

class ZTree extends Widget
{

    private $_setting = '[]';

    private $_nodes = '[]';


    public function init()
    {
        if (is_null($this->_id))
            $this->getId();
    }

    public function run()
    {
        echo '<ul id="'.$this->_id.'" class="ztree"></ul>';

        $view = $this->getView();

        ZTreeAsset::register($view);

        $js = '$.fn.zTree.init($("#'.$this->_id.'"), $this->_setting, $this->_nodes);';
        $view->registerJs($js);
    }
}