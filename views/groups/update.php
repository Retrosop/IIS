<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\groups $model */

$this->title = 'Update Groups: ' . $model->id_groups;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_groups, 'url' => ['view', 'id_groups' => $model->id_groups]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="groups-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
