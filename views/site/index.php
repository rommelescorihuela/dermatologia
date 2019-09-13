<?php

/* @var $this yii\web\View */

$this->title = 'Dermatologia';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 align="center">
        <?php 
                        if(!Yii::$app->user->isGuest)
                             {
                                echo "Bienvenido ".Yii::$app->user->identity->usuario;
                             }else{echo "Sistema de Control de Citas y Consultas de Pacientes";}
                        ?>
        </h1>
    </div>

</div>
