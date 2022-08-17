<?php

namespace Cacko\Yii2\RequireJs;

use yii\web\AssetBundle;
use yii\web\View;

class RequireJsAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets';

    public $js = ['js/__require.js'];

    public $jsOptions = ['position' => View::POS_HEAD];
}
