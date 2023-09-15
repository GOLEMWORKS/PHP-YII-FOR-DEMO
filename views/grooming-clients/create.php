<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GroomingClient $model */

$this->title = 'Create Grooming Client';
$this->params['breadcrumbs'][] = ['label' => 'Grooming Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grooming-client-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
