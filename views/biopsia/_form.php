<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;
use yii\helpers\ArrayHelper;
use yii\jui\AutoComplete;
/* @var $this yii\web\View */
/* @var $model app\models\Biopsia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biopsia-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-4">
    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-4">
  <?php
      echo "<b>fecha_entrega<br /></b>";
      echo DatePicker::widget([
      'model' => $model,
      'attribute' => 'fecha_entrega',
      'options' => ['placeholder' => 'fecha_entrega', 'readonly' => true],
          'pluginOptions' => [
          'format' => 'yyyy-mm-dd',
          'autoclose' => true,

      ]
      ]);
  ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'monto')->textInput() ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'id_biopsia')->hiddenInput()->label(false) ?>
  </div>
  <div class="col-md-4">
    <?php
        echo "<b>fecha_recibido<br /></b>";
        echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'fecha_recibido',
        'options' => ['placeholder' => 'fecha_recibido', 'readonly' => true],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,

        ]
        ]);
    ?>
  </div>
  <div class="col-md-4">
    <?php $cancelado=['seleccione'=>'Seleccione',
                  'C'=>'Cancelado'];?>
    <?= $form->field($model, 'cancelado')->textInput()->dropDownList($cancelado) ?>
  </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
