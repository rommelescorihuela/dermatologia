<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ControlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Controls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="control-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Control', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ci',
            'id_unidad',
            'fecha',
            'pulso_long',
            //'pulso_cant',
            //'spot',
            //'fluencia',
            //'prespray',
            //'costo',
            //'area',
            //'dosimetria',
            //'tiempo',
            //'modo',
            //'r04',
            //'pilot',
            //'energia',
            //'frecuencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
