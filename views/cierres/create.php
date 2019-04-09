<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cierres */

$this->title = 'Create Cierres';
$this->params['breadcrumbs'][] = ['label' => 'Cierres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cierres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
