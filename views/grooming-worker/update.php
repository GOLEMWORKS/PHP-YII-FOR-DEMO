<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GroomingWorker $model */

$this->title = 'Update Grooming Worker: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Grooming Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grooming-worker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
