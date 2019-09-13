<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Paciente;
use app\models\PacienteSearch;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;
use yii\helpers\ArrayHelper;
use yii\jui\AutoComplete;

/* @var $this yii\web\View */
/* @var $model app\models\Archivos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="archivos-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype' => 'multipart/form-data']]); ?>
	<div class="col-md-4">
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
    <?= $form->field($model, 'id_paciente')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="col-md-4">
    <?= $form->field($model, 'nombrecompleto')->textInput() ?>
	</div>
	<div class="col-md-4">
    <?= $form->field($model, 'id_unidad')->Dropdownlist(ArrayHelper::map($unidad->find()->all(), 'id', 'nombre'),['prompt'=>'Selecione']) ?>
	</div>
	<div class="col-md-4">
    <?php
        echo "<b>Fecha<br /></b>";
        echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha',
        'options' => ['placeholder' => 'Fecha', 'readonly' => true],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,

        ]
        ]);
    ?>
	</div>
	<div class="col-md-4">
    <?= $form->field($model, 'archivo')->fileinput() ?>
	</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
	$(document).ready(function(){
  $("#cliente-cedula").blur(function(){
      $.ajax({
       url: '<?php echo Yii::$app->request->baseUrl. '/index.php/paciente/datos' ?>',
       type: 'post',
       data: {
                 cedula: $("#cliente-cedula").val() ,
             },
       success: function (data) {
        $("#archivos-id_paciente").val(data['cedula']);
        $("#archivos-nombrecompleto").val(data['nombrecompleto']);
          //console.log(data);
       }
  });
  });
});
</script>
