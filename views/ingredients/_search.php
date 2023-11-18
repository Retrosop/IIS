<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\IngredientsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ingredients-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ingr') ?>

    <?= $form->field($model, 'cost_price') ?>

    <?= $form->field($model, 'unit_izmireniya') ?>

    <?= $form->field($model, 'nazvanie') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
