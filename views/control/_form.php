<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Control */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="control-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_unidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'pulso_long')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pulso_cant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fluencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prespray')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dosimetria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiempo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pilot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'energia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frecuencia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
