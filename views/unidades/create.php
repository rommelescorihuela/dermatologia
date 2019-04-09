<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidades */

$this->title = 'Create Unidades';
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
