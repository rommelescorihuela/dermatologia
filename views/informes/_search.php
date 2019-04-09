<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informes-search">

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

    <?php // echo $form->field($model, 'fechainfo') ?>

    <?php // echo $form->field($model, 'procedencia') ?>

    <?php // echo $form->field($model, 'motivo') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'examenes') ?>

    <?php // echo $form->field($model, 'dx') ?>

    <?php // echo $form->field($model, 'tx') ?>

    <?php // echo $form->field($model, 'conducta') ?>

    <?php // echo $form->field($model, 'control') ?>

    <?php // echo $form->field($model, 'plan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
