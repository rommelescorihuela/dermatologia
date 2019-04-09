<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;

$bundle = yiister\gentelella\assets\Asset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bienvenido,</span>
                        <h2><?php 
                        if(!Yii::$app->user->isGuest){
                        echo Yii::$app->user->identity->nombre;
                            }
                        ?>
                        </h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => "Inicio", "url" => ["site/index"], "icon" => "home"],
                                    Yii::$app->user->isGuest ? (["label" => "Entrar", "url" => ["site/login"], "icon" => "close"]):(["label" => "Cita", "url" => ['/cita/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Archivos", "url" => ['/archivos/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Biopsias", "url" => ['/biopsia/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Cierres", "url" => ['/cierres/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Consulta", "url" => ['/consulta/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Control", "url" => ['/control/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Historial", "url" => ['/historial/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Informe", "url" => ['/informes/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Medico", "url" => ['/medico/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Paciente", "url" => ['/paciente/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Presupuesto", "url" => ['/presupuestos/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Unidad", "url" => ['/unidades/index'], "icon" => "users"]),
                                    Yii::$app->user->isGuest ? ([]):(["label" => "Usuarios", "url" => ['/usuarios/index'], "icon" => "users"]),
                                ],
                            ]
                        )
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <!--<div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>-->
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                         <?php if(!Yii::$app->user->isGuest){ ?>
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="http://placehold.it/128x128" alt=""><?php echo Yii::$app->user->identity->nombre;?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <?=
                                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout ',
                    ['class' => 'btn btn-link logout fa fa-sign-out pull-right']
                )
                . Html::endForm()
                . '</li>'
                                ?>
                            </ul>
                        </li>
                        <?php } ?>
                       

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>

            <?= $content ?>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
               
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

</div>


<!-- /footer content -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
