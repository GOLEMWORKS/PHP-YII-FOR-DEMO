<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GroomingRecords $model */

$this->title = 'Update Grooming Records: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Grooming Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grooming-records-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
