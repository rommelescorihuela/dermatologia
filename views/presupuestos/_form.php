<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Presupuestos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuestos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_medico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_unidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaconsulta')->textInput() ?>

    <?= $form->field($model, 'fechapresupuesto')->textInput() ?>

    <?= $form->field($model, 'dx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'areas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sesiones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costosesion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktilite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metvix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cirujano')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ayudante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'botox')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biopsia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
