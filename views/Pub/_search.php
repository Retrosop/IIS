<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PubSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="search-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pub') ?>

    <?= $form->field($model, 'namepub') ?>

    <?= $form->field($model, 'descpub') ?>

    <?= $form->field($model, 'datepub') ?>

    <?= $form->field($model, 'authorpub') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
