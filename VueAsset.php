<?php

namespace xj\vuejs;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class VueAsset extends AssetBundle
{

    public $sourcePath = '@bower/vue/dist';
    public $js = ['vue.min.js'];

}
