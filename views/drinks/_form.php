<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\drinks $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="drinks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nazvanie')->textInput() ?>

    <?= $form->field($model, 'id_groups')->textInput() ?>

    <?= $form->field($model, 'cost_price')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
