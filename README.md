Yii2 Admin-LTE 2
=================

Admin-LTE-2 Extension for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist codezeen/yii2-adminlte "*"
```

or add

```
"codezeen/yii2-adminlte": "*"
```

to the require section of your `composer.json` file.


Register Asset
-----
### Register Asset directly

Register asset directly to view file.

```php
\codezeen\yii2\adminlte\AdminLteAsset::register($this);
```

### Register Asset via Asset Bundle

```php
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/site.js',
    ];
    public $depends = [
        'codezeen\yii2\adminlte\AdminLteAsset',
    ];
}
```

Render Sidebar Left
-----
```php
use codezeen\yii2\adminlte\widgets\Menu;
```
 
```php
$adminSiteMenu[0] = ['label' => 'MAIN NAVIGATION', 'options' => ['class' => 'header'], 'template' => '{label}'];
$adminSiteMenu[1] = [
    'label' => 'Dashboard',
    'icon'  => 'fa fa-dashboard',
    'items' => [['icon' => 'fa fa-circle-o', 'label' => 'Home', 'url' => ['/site/index']]],
];
$adminSiteMenu[2] = [
    'label'    => 'BADGE AND MULTILEVEL',
    'options'  => ['class' => 'header'],
    'template' => '{label}',
];
$adminSiteMenu[3] = [
    'label'   => 'Multilevel',
    'icon'    => 'fa fa-share',
    'options' => ['class' => 'treeview'],
    'items'   => [
        ['icon' => 'fa fa-circle-o', 'label' => 'Level One', 'url' => '#'],
        [
            'icon'  => 'fa fa-circle-o',
            'label' => 'Level One',
            'url'   => '#',
            'items' => [
                ['icon' => 'fa fa-circle-o', 'label' => 'Badge', 'url' => '#', 'badge' => '2'],
                [
                    'icon'         => 'fa fa-circle-o',
                    'label'        => 'Badge red',
                    'url'          => '#',
                    'badge'        => '2',
                   'badgeBgClass' => 'bg-red',
                ],
                [
                    'icon'         => 'fa fa-circle-o',
                    'label'        => 'Badge options',
                    'url'          => '#',
                    'badge'        => '2',
                    'badgeOptions' => ['class' => 'label pull-right bg-yellow'],
                ],
            ],
        ],
        ['icon' => 'fa fa-circle-o', 'label' => 'Level One', 'url' => '#'],
    ],
];
ksort($adminSiteMenu);
echo Menu::widget([items' => $adminSiteMenu]);
```

Using Theme
-----
Edit your config/main.php with the following:
```php
'components'    => [
    // Other components
    'view'      => [
        'theme'     => [
            'pathMap'   => [
                '@app/views' => '@vendor/codezeen/yii2-adminlte/theme'
            ],
        ],
    ],
    // Other components
]
```
Change Skin and Layout
-----
### Edit config/params.php
The default skin configured on params.php. You can override the skin on the controller.
```php
return [
    // Other params
    'bodyClass' => 'skin-blue sidebar-mini',
    // Other params
];
```
### In Controller Action
```php
 public function actionSignup()
{
    $this->layout = 'blank';
    Yii::$app->params['bodyClass'] = 'login-page';
}
```

