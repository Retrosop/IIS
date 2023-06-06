<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Search $model */

$this->title = 'Update Search: ' . $model->id_pub;
$this->params['breadcrumbs'][] = ['label' => 'Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pub, 'url' => ['view', 'id_pub' => $model->id_pub]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="search-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
