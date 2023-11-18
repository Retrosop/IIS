<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dishes $model */

$this->title = 'Update Dishes: ' . $model->id_dishes;
$this->params['breadcrumbs'][] = ['label' => 'Dishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dishes, 'url' => ['view', 'id_dishes' => $model->id_dishes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dishes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
