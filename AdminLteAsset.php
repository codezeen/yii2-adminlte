<?php
/**
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 */

namespace codezeen\yii2\adminlte;

/**
 * Class AdminLteAsset.
 * Register admin-lte-2 to view.
 *
 * @author  Agiel K. Saputra
 * @since   1.0
 */
class AdminLteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];
    public $js = ['js/app.min.js'];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'codezeen\yii2\fastclick\FastClickAsset',
    ];
}
