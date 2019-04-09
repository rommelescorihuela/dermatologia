<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PresupuestosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuestos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ci') ?>

    <?= $form->field($model, 'id_medico') ?>

    <?= $form->field($model, 'id_unidad') ?>

    <?= $form->field($model, 'fechaconsulta') ?>

    <?php // echo $form->field($model, 'fechapresupuesto') ?>

    <?php // echo $form->field($model, 'dx') ?>

    <?php // echo $form->field($model, 'plan') ?>

    <?php // echo $form->field($model, 'areas') ?>

    <?php // echo $form->field($model, 'sesiones') ?>

    <?php // echo $form->field($model, 'costosesion') ?>

    <?php // echo $form->field($model, 'aktilite') ?>

    <?php // echo $form->field($model, 'metvix') ?>

    <?php // echo $form->field($model, 'cirujano') ?>

    <?php // echo $form->field($model, 'ayudante') ?>

    <?php // echo $form->field($model, 'equipo') ?>

    <?php // echo $form->field($model, 'botox') ?>

    <?php // echo $form->field($model, 'biopsia') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
