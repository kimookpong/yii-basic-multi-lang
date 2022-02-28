<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii2mod\alert\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Yii::t('app', 'Admin System') ?> | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="nav-md">
    <?php $this->beginBody() ?>
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= Yii::$app->homeUrl ?>" class="site_title"><i class="fa-brands fa-grav fa-spin text-primary" style="border: none;--fa-animation-duration: 15s;font-size: 120%;"></i> <span><?= Yii::t('app', 'Admin System') ?></span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li class="<?= (Yii::$app->controller->id == 'site') ? 'active' : '' ?>">
                                    <a href="<?= Yii::$app->homeUrl ?>">
                                        <i class="fa-regular fa-map <?= (Yii::$app->controller->id == 'site') ? 'fa-bounce text-success' : '' ?>"></i>
                                        <span class="menu-title"><?= Yii::t('app', 'Dashboard') ?></span>
                                    </a>
                                </li>
                                <li class="<?= (Yii::$app->controller->id == 'person') ? 'active' : '' ?>">
                                    <a href="<?= Url::toRoute('person/index') ?>">
                                        <i class="fa-regular fa-user <?= (Yii::$app->controller->id == 'person') ? 'fa-bounce text-success' : '' ?>"></i>
                                        <span class="menu-title"><?= Yii::t('app', 'People') ?></span>
                                    </a>
                                </li>
                                <li class="<?= (Yii::$app->controller->id == 'movie' || Yii::$app->controller->id == 'movie-cat') ? 'active' : '' ?>"><a><i class="fa-regular fa-file-video <?= (Yii::$app->controller->id == 'movie' || Yii::$app->controller->id == 'movie-cat') ? 'fa-bounce text-success' : '' ?>"></i> <?= Yii::t('app', 'Movies') ?> <span class="fa-solid fa-circle-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="<?= (Yii::$app->controller->id == 'movie') ? 'active' : '' ?>"><a href="<?= Url::toRoute('movie/index') ?>"><?= Yii::t('app', 'Movie List') ?></a></li>
                                        <li class="<?= (Yii::$app->controller->id == 'movie-cat') ? 'active' : '' ?>"><a href="<?= Url::toRoute('movie-cat/index') ?>"><?= Yii::t('app', 'Movie Catagory') ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <i class="fa-solid fa-gear"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <i class="fa-solid fa-eye-slash"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <i class="fa-solid fa-power-off"></i>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= Yii::$app->homeUrl ?>template/gentelella/production/images/img.jpg" alt=""><?= Yii::$app->user->identity->fullname ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>

                                    <?= Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                            '<i class="fa fa-sign-out pull-right"></i> ' . Yii::t('app', 'Log Out'),
                                            ['class' => 'dropdown-item btn-icon']
                                        )
                                        . Html::endForm()
                                    ?>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item dropdown open" style="padding: 0.4rem;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="flag-icon <?= Yii::$app->helpers->lang_flag() ?>"></i> <?= Yii::$app->helpers->lang() ?>
                                </a>
                                <ul class="dropdown-menu list-unstyled" role="menu" aria-labelledby="navbarDropdown1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 17px, 0px);">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="<?= Url::current(['language' => 'th-TH']) ?>">
                                            <i class="flag-icon flag-icon-th"></i> <?= Yii::t('app', 'Thai') ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="<?= Url::current(['language' => 'en-US']) ?>">
                                            <i class="flag-icon flag-icon-gb-eng"></i> <?= Yii::t('app', 'English') ?>
                                        </a>
                                    </li>
                                    <!--
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="<?= Url::current(['language' => 'zh-CN']) ?>">
                                            <i class="flag-icon flag-icon-cn"></i> <?= Yii::t('app', 'Chinese') ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="<?= Url::current(['language' => 'ja-JP']) ?>">
                                            <i class="flag-icon flag-icon-jp"></i> <?= Yii::t('app', 'Japanese') ?>
                                        </a>
                                    </li>
                                        -->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3><?= Html::encode($this->title) ?></h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Search for...') ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_content">
                                    <?= Alert::widget([
                                        'options' => [
                                            'timer' => 3000,
                                            'confirmButtonText' => Yii::t('app', 'OK'),
                                            'animation' => "slide-from-top",
                                        ],
                                    ]) ?>
                                    <?= $content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright © <?= date('Y') ?>. <a href="https://www.kimookpong.com/" target="_blank">Kimookpong</a>. All rights reserved. | <?= Yii::powered() ?>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>