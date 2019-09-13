<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Medico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="col-md-4">
    <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'id_unidad')->Dropdownlist(ArrayHelper::map($unidad->find()->all(), 'id', 'nombre'),['prompt'=>'Selecione']) ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'telefono1')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'telefono2')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-4">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
  </div>
    <?php ActiveForm::end(); ?>

</div>
