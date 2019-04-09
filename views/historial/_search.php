<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HistorialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historial-search">

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

    <?= $form->field($model, 'tipopiel') ?>

    <?php // echo $form->field($model, 'bx') ?>

    <?php // echo $form->field($model, 'bx_fecha') ?>

    <?php // echo $form->field($model, 'bx_patologo') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'mc') ?>

    <?php // echo $form->field($model, 'trata_recibido') ?>

    <?php // echo $form->field($model, 'trata_vo') ?>

    <?php // echo $form->field($model, 'trata_topico') ?>

    <?php // echo $form->field($model, 'dx') ?>

    <?php // echo $form->field($model, 'evolucion') ?>

    <?php // echo $form->field($model, 'efect_secun') ?>

    <?php // echo $form->field($model, 'procedencia') ?>

    <?php // echo $form->field($model, 'antecedeflia') ?>

    <?php // echo $form->field($model, 'antecedepers') ?>

    <?php // echo $form->field($model, 'exam_fisico') ?>

    <?php // echo $form->field($model, 'conducta') ?>

    <?php // echo $form->field($model, 'control') ?>

    <?php // echo $form->field($model, 'exam_para') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'costo2') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
