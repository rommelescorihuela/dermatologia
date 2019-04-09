<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Historial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_medico')->textInput() ?>

    <?= $form->field($model, 'id_unidad')->textInput() ?>

    <?= $form->field($model, 'tipopiel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bx_fecha')->textInput() ?>

    <?= $form->field($model, 'bx_patologo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'mc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trata_recibido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trata_vo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'trata_topico')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dx')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'evolucion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'efect_secun')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'procedencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'antecedeflia')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'antecedepers')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'exam_fisico')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'conducta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'control')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'exam_para')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo')->textInput() ?>

    <?= $form->field($model, 'costo2')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
