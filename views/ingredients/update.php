<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ingredients $model */

$this->title = 'Update Ingredients: ' . $model->id_ingr;
$this->params['breadcrumbs'][] = ['label' => 'Ingredients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ingr, 'url' => ['view', 'id_ingr' => $model->id_ingr]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ingredients-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
