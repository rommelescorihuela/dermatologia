<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InformesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Informes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ci',
            'id_medico',
            'id_unidad',
            'fechaconsulta',
            //'fechainfo',
            //'procedencia',
            //'motivo:ntext',
            //'descripcion:ntext',
            //'examenes:ntext',
            //'dx:ntext',
            //'tx:ntext',
            //'conducta:ntext',
            //'control:ntext',
            //'plan:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
