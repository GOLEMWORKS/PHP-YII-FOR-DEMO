<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GroomingClient $model */

$this->title = 'Update Grooming Client: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Grooming Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grooming-client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
