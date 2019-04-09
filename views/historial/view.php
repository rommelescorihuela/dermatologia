<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Historial */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Historials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="historial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ci',
            'id_medico',
            'id_unidad',
            'tipopiel',
            'bx',
            'bx_fecha',
            'bx_patologo',
            'fecha',
            'mc:ntext',
            'trata_recibido:ntext',
            'trata_vo:ntext',
            'trata_topico:ntext',
            'dx:ntext',
            'evolucion:ntext',
            'efect_secun:ntext',
            'procedencia',
            'antecedeflia:ntext',
            'antecedepers:ntext',
            'exam_fisico:ntext',
            'conducta:ntext',
            'control:ntext',
            'exam_para:ntext',
            'area',
            'costo',
            'costo2',
            'descripcion:ntext',
        ],
    ]) ?>

</div>
