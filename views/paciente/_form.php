<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Paciente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
<div class="col-md-1">
</div>
    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-2">
        <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>
    </div>        
    <div class="col-md-2">
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'fechanac')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'edad')->textInput() ?>
    </div>
</div>
<div class="col-md-1">
</div>
<div class="row">
    <div class="col-md-2">
        <?= $form->field($model, 'edocivil')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'direccion')->textArea(['maxlength' => true]) ?>
    </div>    
    <div class="col-md-2">
        <?= $form->field($model, 'telefono1')->textInput(['maxlength' => true]) ?>
    </div>    
    <div class="col-md-2">
        <?= $form->field($model, 'telefono2')->textInput(['maxlength' => true]) ?>
    </div>    
    <div class="col-md-2">
        <?= $form->field($model, 'telefono3')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="col-md-1">
</div>
<div class="row"> 
    <div class="col-md-2">
        <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'profesion')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'motivo')->textInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12" align="center">
        
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
</div>

    <?php ActiveForm::end(); ?>


</div>
