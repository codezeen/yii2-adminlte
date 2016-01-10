<?php
/**
 * @author  Agiel K. Saputra <13nightevil@gmail.com>
 */

use cebe\gravatar\Gravatar;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<header class="main-header">
    <a href="<?= Url::base(true) ?>" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><?= Yii::$app->name ?></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i> <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <?= Gravatar::widget([
                                                'email'   => 'example@mail.com',
                                                'options' => [
                                                    'alt'   => 'example@mail.com',
                                                    'class' => 'img-circle',
                                                ],
                                                'size'    => 128,
                                            ]) ?>

                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <?= Gravatar::widget([
                                                'email'   => 'example@mail.com',
                                                'options' => [
                                                    'alt'   => 'example@mail.com',
                                                    'class' => 'img-circle',
                                                ],
                                                'size'    => 128,
                                            ]) ?>

                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <?= Gravatar::widget([
                                                'email'   => 'example@mail.com',
                                                'options' => [
                                                    'alt'   => 'example@mail.com',
                                                    'class' => 'img-circle',
                                                ],
                                                'size'    => 128,
                                            ]) ?>

                                        </div>
                                        <h4>
                                            Developers
                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <?= Gravatar::widget([
                                                'email'   => 'example@mail.com',
                                                'options' => [
                                                    'alt'   => 'example@mail.com',
                                                    'class' => 'img-circle',
                                                ],
                                                'size'    => 128,
                                            ]) ?>

                                        </div>
                                        <h4>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <?= Gravatar::widget([
                                                'email'   => 'example@mail.com',
                                                'options' => [
                                                    'alt'   => 'example@mail.com',
                                                    'class' => 'img-circle',
                                                ],
                                                'size'    => 128,
                                            ]) ?>

                                        </div>
                                        <h4>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may
                                        not fit into the page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i> <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>
                                            Create a nice theme
                                            <small class="pull-right">40%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-green" style="width: 40%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>
                                            Some task I need to do
                                            <small class="pull-right">60%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>
                                            Make beautiful transitions
                                            <small class="pull-right">80%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>

                <?php if (!Yii::$app->user->isGuest): ?>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?= Gravatar::widget([
                                'email'   => Yii::$app->user->identity->email,
                                'options' => [
                                    'alt'   => Yii::$app->user->identity->username,
                                    'class' => 'user-image',
                                ],
                                'size'    => 25,
                            ]) ?>

                            <span class="hidden-xs"><?= Yii::$app->user->identity->username; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <?= Gravatar::widget([
                                    'email'   => Yii::$app->user->identity->email,
                                    'options' => [
                                        'alt'   => Yii::$app->user->identity->username,
                                        'class' => 'img-circle',
                                    ],
                                    'size'    => 84,
                                ]) ?>

                                <p>
                                    <?= Yii::$app->user->identity->username; ?>
                                    <small>
                                        <?= Yii::t(
                                            'app', 'Member since {date}', [
                                                'date' => Yii::$app->formatter->asDate(
                                                    Yii::$app
                                                        ->user
                                                        ->identity
                                                        ->created_at,
                                                    'php:F d, Y'
                                                ),
                                            ]
                                        ) ?>
                                    </small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <?= Html::a(
                                        Yii::t('app', 'Profile'),
                                        '#',
                                        ['class' => 'btn btn-default btn-flat'])
                                    ?>

                                </div>
                                <div class="pull-right">
                                    <?= Html::a(
                                        Yii::t('app', 'Sign Out'),
                                        ['/site/logout'],
                                        ['class' => 'btn btn-default btn-flat', 'data-method' => 'post']
                                    ) ?>

                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>

            </ul>
        </div>
    </nav>
</header>
