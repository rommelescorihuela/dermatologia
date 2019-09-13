<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\AutoComplete;
use app\models\Paciente;
use app\models\PacienteSearch;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model app\models\Cita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cita-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12">
    <div class="col-md-3">
    <?php
  $data = Paciente::find()
       ->select(['ci as value'])
       ->asArray()
       ->all();
       echo '<b>Cedula</b>' .'<br>';
   echo AutoComplete::widget([
   'options'=>['id'=>'cliente-cedula','class'=>'form-control','name'=>'Cliente[cedula]'],
   'clientOptions' => [
   'source' => $data,
   'minLength'=>'1',
   'autoFill'=>true,
   ],
                ]);
           ?>
    </div>
    <?= $form->field($model, 'id_paciente')->hiddenInput()->label(false) ?>
    </div>
    <div class="col-md-12">
  <div class="col-md-3">
    <?= $form->field($model, 'id_medico')->Dropdownlist(ArrayHelper::map($medico->find()->all(), 'id', 'nombre','apellido'),['prompt'=>'Selecione']) ?>
  </div>
  <div class="col-md-3">
    <?= $form->field($model, 'nombrecompleto')->textInput(['readonly'=>true])->label('Nombre del paciente') ?>
  </div>
  <div class="col-md-3">
    <?php
        echo "<b>Fecha de la cita<br /></b>";
        echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha',
        'options' => ['placeholder' => 'Fecha de la cita', 'readonly' => true],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,

        ]
        ]);
    ?>
  </div>
  <div class="col-md-2">
    <?php $horas=['seleccione'=>'Seleccione',
                  '8:00'=>'8:00',
                  '9:00'=>'9:00',
                  '10:00'=>'10:00',
                  '11:00'=>'11:00',
                  '12:00'=>'12:00',
                  '13:00'=>'13:00',
                  '14:00'=>'14:00',
                  '15:00'=>'15:00',
                  '16:00'=>'16:00',
                  '17:00'=>'17:00',] ?>
    <?= $form->field($model, 'hora')->textInput()->dropDownList($horas) ?>
  </div>
  <div class="col-md-3">
    <?= $form->field($model, 'status')->textInput(['maxlength' => true])->dropDownList(['0'=>'Seleccione','1'=>'Primera vez','2'=>'control']) ?>
  </div>
<div class="col-md-3">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'enviar']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
<script>
$(document).ready(function(){
  $("#cliente-cedula").blur(function(){
      $.ajax({
       url: '<?php echo Yii::$app->request->baseUrl. '/index.php/paciente/datos' ?>',
       type: 'post',
       data: {
                 cedula: $("#cliente-cedula").val() ,
             },
       success: function (data) {
        $("#cita-id_paciente").val(data['cedula']);
        $("#cita-nombrecompleto").val(data['nombrecompleto']);
          //console.log(data);
       }
  });
  });
});

$(document).ready(function(){
  $("#cita-hora").blur(function(){
      $.ajax({
       url: '<?php echo Yii::$app->request->baseUrl. '/index.php/cita/consultacita' ?>',
       type: 'post',
       data: {
                 hora: $("#cita-hora").val() ,
                 medico: $("#cita-id_medico").val() ,
                 fecha: $("#cita-fecha").val() ,
             },
       success: function (data) {
        if(data['ocupado']==true)
        {
          alert('por favor cambie la cita para otra hora u otro dia')
        $("#enviar").attr('disabled',true);
        }
        else{
           $("#enviar").attr('disabled',false);
        }
        //$("#cita-nombrecompleto").val(data['nombrecompleto']);
          //console.log(data);
       }
  });
  });
});


</script>
