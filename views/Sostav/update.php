<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sostav $model */

$this->title = 'Update Sostav: ' . $model->id_sostav;
$this->params['breadcrumbs'][] = ['label' => 'Sostavs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sostav, 'url' => ['view', 'id_sostav' => $model->id_sostav]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sostav-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
