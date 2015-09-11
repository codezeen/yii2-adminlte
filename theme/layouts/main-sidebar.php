<?php
/**
 * @file    main-sidebar.php.
 * @author  Agiel K. Saputra
 * @date    5/8/2015
 * @time    3:13 PM
 */

use yii\helpers\Html;
use cebe\gravatar\Gravatar;
use codezeen\yii2\adminlte\widgets\MainSidebar;

?>

<aside class="main-sidebar">
    <section class="sidebar">

        <?php if (!Yii::$app->user->isGuest) { ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <?php echo Gravatar::widget([
                        'email'   => Yii::$app->user->identity->email,
                        'options' => [
                            'alt'   => Yii::$app->user->identity->username,
                            'class' => 'img-circle'
                        ],
                        'size'    => 45
                    ]); ?>
                </div>
                <div class="pull-left info">
                    <p><?= Yii::$app->user->identity->username; ?></p>
                    <?= Html::a('<i class="fa fa-circle text-success"></i>' . Yii::t('app', 'Online'), ['/user/profile']); ?>
                </div>
            </div>
        <?php } ?>

        <?php
        $adminSiteMenu[0] = ['label' => 'MAIN NAVIGATION', 'options' => ['class' => 'header'], 'template' => '{label}'];
        $adminSiteMenu[1] = ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'items' => [
            ['icon' => 'fa fa-circle-o', 'label' => 'Home', 'url' => ['/site/index']],
        ]];
        $adminSiteMenu[2] = ['label' => 'BADGE AND MULTILEVEL', 'options' => ['class' => 'header'], 'template' => '{label}'];
        $adminSiteMenu[3] = ['label' => 'Multilevel', 'icon' => 'fa fa-share', 'options' => ['class' => 'treeview'], 'items' => [
            ['icon' => 'fa fa-circle-o', 'label' => 'Level One', 'url' => '#'],
            ['icon' => 'fa fa-circle-o', 'label' => 'Level One', 'url' => '#', 'items' => [
                ['icon' => 'fa fa-circle-o', 'label' => 'Badge', 'url' => '#', 'badge' => '2'],
                ['icon' => 'fa fa-circle-o', 'label' => 'Badge red', 'url' => '#', 'badge' => '2', 'badgeBgClass' => 'bg-red'],
                ['icon' => 'fa fa-circle-o', 'label' => 'Badge options', 'url' => '#', 'badge' => '2', 'badgeOptions' => [
                    'class' => 'label pull-right bg-yellow'
                ]],
            ]],
            ['icon' => 'fa fa-circle-o', 'label' => 'Level One', 'url' => '#'],
        ]];
        $adminSiteMenu[4] = ['label' => 'LABELS', 'options' => ['class' => 'header'], 'template' => '{label}'];
        $adminSiteMenu[7] = ['icon' => 'fa fa-circle-o text-aqua', 'label' => 'Information', 'url' => '#'];
        $adminSiteMenu[6] = ['icon' => 'fa fa-circle-o text-yellow', 'label' => 'Warning', 'url' => '#'];
        $adminSiteMenu[5] = ['icon' => 'fa fa-circle-o text-red', 'label' => 'Important', 'url' => '#'];

        // Sort the menu
        ksort($adminSiteMenu);

        echo MainSidebar::widget([
            'items'   => $adminSiteMenu,
        ])
        ?>
    </section>
</aside>
