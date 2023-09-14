<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\GroomingRecords $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="grooming-records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client')->textInput() ?>

    <?= $form->field($model, 'worker')->textInput() ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
