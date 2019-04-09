<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Informes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Informes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="informes-view">

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
            'fechaconsulta',
            'fechainfo',
            'procedencia',
            'motivo:ntext',
            'descripcion:ntext',
            'examenes:ntext',
            'dx:ntext',
            'tx:ntext',
            'conducta:ntext',
            'control:ntext',
            'plan:ntext',
        ],
    ]) ?>

</div>
