<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Biopsia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biopsia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_entrega')->textInput() ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'id_biopsia')->textInput() ?>

    <?= $form->field($model, 'fecha_recibido')->textInput() ?>

    <?= $form->field($model, 'cancelado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
