<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Sostav $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sostav-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_dishes')->textInput() ?>

    <?= $form->field($model, 'id_ingr')->textInput() ?>

    <?= $form->field($model, 'kol_vo')->textInput() ?>

    <?= $form->field($model, 'cost_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
