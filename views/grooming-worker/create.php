<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GroomingWorker $model */

$this->title = 'Create Grooming Worker';
$this->params['breadcrumbs'][] = ['label' => 'Grooming Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grooming-worker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
