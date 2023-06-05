<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="search-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namepub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descpub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datepub')->textInput() ?>

    <?= $form->field($model, 'authorpub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
