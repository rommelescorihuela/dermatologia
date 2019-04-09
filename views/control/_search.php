<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ControlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="control-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ci') ?>

    <?= $form->field($model, 'id_unidad') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'pulso_long') ?>

    <?php // echo $form->field($model, 'pulso_cant') ?>

    <?php // echo $form->field($model, 'spot') ?>

    <?php // echo $form->field($model, 'fluencia') ?>

    <?php // echo $form->field($model, 'prespray') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'dosimetria') ?>

    <?php // echo $form->field($model, 'tiempo') ?>

    <?php // echo $form->field($model, 'modo') ?>

    <?php // echo $form->field($model, 'r04') ?>

    <?php // echo $form->field($model, 'pilot') ?>

    <?php // echo $form->field($model, 'energia') ?>

    <?php // echo $form->field($model, 'frecuencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
