<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Archivos */

$this->title = 'Update Archivos: ' . $model->idarc;
$this->params['breadcrumbs'][] = ['label' => 'Archivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idarc, 'url' => ['view', 'id' => $model->idarc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="archivos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'unidad' => $unidad,
    ]) ?>

</div>
