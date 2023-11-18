<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\drinks $model */

$this->title = 'Update Drinks: ' . $model->id_drinks;
$this->params['breadcrumbs'][] = ['label' => 'Drinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_drinks, 'url' => ['view', 'id_drinks' => $model->id_drinks]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drinks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
