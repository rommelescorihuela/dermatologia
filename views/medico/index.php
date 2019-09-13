<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Unidades;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);
      $unidad= new Unidades();
    ?>

    <p>
        <?= Html::a('Create Medico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'usuario',
            //'id_unidad',
            'nombre',
            'apellido',
            [
    'attribute' => 'Unidad medica',
    'format'    => 'html',
    'value'     => function($model)
    {
        $items = "";
        $uni=\app\models\Unidades::findAll(['id'=>$model->id_unidad]);
        foreach($uni as $p)
        {
          $items .= $p['nombre'];
        }
        return $items;
    },
],
            'telefono1',
            'telefono2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
