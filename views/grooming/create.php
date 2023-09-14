<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GroomingRecords $model */

$this->title = 'Create Grooming Records';
$this->params['breadcrumbs'][] = ['label' => 'Grooming Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grooming-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
