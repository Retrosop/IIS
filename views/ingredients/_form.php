<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Ingredients $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ingredients-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cost_price')->textInput() ?>

    <?= $form->field($model, 'unit_izmireniya')->textInput() ?>

    <?= $form->field($model, 'nazvanie')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
