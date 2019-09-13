<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Paciente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paciente-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="col-md-4">
    <?= $form->field($model, 'ci')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::className(),[
    'mask' => '99999999',
]); ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4"> 
<?php
    echo "<b>Fecha de nacimiento</b>";
    echo DatePicker::widget([
    'model' => $model, 
    'attribute' => 'fechanac',
    'options' => ['placeholder' => 'Fecha de nacimiento', 'readonly' => true],
        'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'autoclose' => true,

    ]
    ]);
?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'edad')->textInput()->widget(\yii\widgets\MaskedInput::className(),[
    'mask' => '99',
]); ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'edocivil')->textInput(['maxlength' => true])->dropDownList(['Seleccione'=>'Seleccione','Soltero'=>'Soltero','Casado'=>'Casado','Viudo'=>'Viudo','Divorciado   '=>'Divorciado ']) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'direccion')->textArea(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'telefono1')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::className(),[
    'mask' => '0999-9999999',
]); ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'telefono2')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::className(),[
    'mask' => '0999-9999999',
]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'telefono3')->textInput(['maxlength' => true])->widget(\yii\widgets\MaskedInput::className(),[
    'mask' => '0999-9999999',
]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'profesion')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">   
    <?= $form->field($model, 'sexo')->dropDownList(['Seleccione'=>'Seleccione','1'=>'Masculino','2'=>'Femenino']) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'motivo')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-4">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
