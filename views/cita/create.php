<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cita */

$this->title = 'Create Cita';
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
