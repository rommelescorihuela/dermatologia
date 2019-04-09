<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biopsia */

$this->title = 'Create Biopsia';
$this->params['breadcrumbs'][] = ['label' => 'Biopsias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biopsia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
