<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Informes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_medico')->textInput() ?>

    <?= $form->field($model, 'id_unidad')->textInput() ?>

    <?= $form->field($model, 'fechaconsulta')->textInput() ?>

    <?= $form->field($model, 'fechainfo')->textInput() ?>

    <?= $form->field($model, 'procedencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motivo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'examenes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dx')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tx')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'conducta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'control')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
