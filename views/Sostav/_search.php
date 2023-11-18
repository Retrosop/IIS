<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SostavSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sostav-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sostav') ?>

    <?= $form->field($model, 'id_dishes') ?>

    <?= $form->field($model, 'id_ingr') ?>

    <?= $form->field($model, 'kol_vo') ?>

    <?= $form->field($model, 'cost_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
