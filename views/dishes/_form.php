<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Dishes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dishes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'natcenka')->textInput() ?>

    <?= $form->field($model, 'nazvanie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
