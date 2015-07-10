<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use wfcreations\metronic\bundles\AdminTheme4Asset;
use wfcreations\metronic\bundles\pages\styles\TasksAsset;
use wfcreations\simplelineicons\AssetBundle;
use wfcreations\metronic\bundles\globalassets\JquerySlimscrollAsset;

AppAsset::register($this);
$adminTheme4Asset = AdminTheme4Asset::register($this);
TasksAsset::register($this);
AssetBundle::register($this);
JquerySlimscrollAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
        <?php $this->beginBody() ?>
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner">
                <div class="page-logo">
                    <a href="<?= Url::to(['/']) ?>">
                        <img src="<?= $adminTheme4Asset->baseUrl ?>/img/logo-light.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <div class="page-top">
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form" action="extra_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                            </span>
                        </div>
                    </form>
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide">
                            </li>
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-success">
                                        7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">12 pending</span> notifications</h3>
                                        <a href="extra_profile.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span>
                                                        New user registered. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator hide">
                            </li>
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-envelope-open"></i>
                                    <span class="badge badge-danger">
                                        4 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have <span class="bold">7 New</span> Messages</h3>
                                        <a href="inbox.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="inbox.html?a=view">
                                                    <span class="photo">
                                                        <img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                                                    </span>
                                                    <span class="subject">
                                                        <span class="from">
                                                            Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message">
                                                        Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator hide">
                            </li>
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-primary">
                                        3 </span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        <h3>You have <span class="bold">12 pending</span> tasks</h3>
                                        <a href="page_todo.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile">
                                        Nick </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="<?= $adminTheme4Asset->baseUrl ?>/img/avatar9.jpg"/>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="page-container">
            <?=
            \wfcreations\metronic\widgets\SidebarMenu::widget([
                'items' => [
                    [
                        'label' => 'Home',
                        'url' => ['/'],
                        'icon' => 'icon-home',
                        'badge' => [
                            'label' => '1',
                            'type' => wfcreations\metronic\widgets\Badge::TYPE_DANGER,
                        ],
                    ],
                    [
                        'label' => 'About',
                        'icon' => 'icon-info',
                        'url' => ['/site/about'],
                    ],
                    [
                        'label' => 'Github',
                        'icon' => 'fa fa-github',
                        'url' => 'https://github.com/wfcreations/yii2-metronic',
                    ],
                    [
                        'label' => 'Contact',
                        'icon' => 'icon-envelope',
                        'url' => ['/site/contact'],
                    ],
                    [
                        'label' => 'Multi Level Menu',
                        'icon' => 'icon-folder',
                        'items' => [
                            [
                                'label' => 'Item 1',
                                'icon' => 'icon-settings',
                                'items' => [
                                    [
                                        'label' => 'Sample Link 1',
                                        'icon' => 'icon-user',
                                        'items' => [
                                            [
                                                'label' => 'Sample Link 1',
                                                'icon' => 'icon-power'
                                            ],
                                            [
                                                'label' => 'Sample Link 1',
                                                'icon' => 'icon-paper-plane'
                                            ],
                                            [
                                                'label' => 'Sample Link 1',
                                                'icon' => 'icon-star'
                                            ],
                                        ],
                                    ]
                                ],
                            ],
                            [
                                'label' => 'Item 2',
                                'icon' => 'icon-settings'
                            ],
                            [
                                'label' => 'Item 3',
                                'icon' => 'icon-bar-chart'
                            ],
                        ],
                    ],
                    Yii::$app->user->isGuest ?
                            [
                        'label' => 'Login',
                        'icon' => 'icon-user',
                        'items' => [
                            [
                                'label' => 'Login 1',
                                'url' => ['/site/login'],
                            ]
                        ],
                            ] :
                            [
                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']
                            ],
                ],
            ]);
            ?>
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?= $content ?>
                </div>
            </div>
        </div>
        <?=
        wfcreations\metronic\widgets\Footer::widget([
            'label' => date('Y') . ' © ' . Html::a('wfcreations', 'http://www.wfcreations.com.br') . '. ' . Html::a('Yii2-Metronic exntesion', 'https://github.com/wfcreations/yii2-metronic') . '.'
        ])
        ?>
        <?php $this->endBody() ?>
        <script>
            jQuery(document).ready(function () {
                Metronic.init(); // init metronic core componets
                Layout.init(); // init layout
                QuickSidebar.init(); // init quick sidebar
            });
        </script>
    </body>
</html>
<?php $this->endPage() ?>