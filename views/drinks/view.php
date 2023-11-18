<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\drinks $model */

$this->title = $model->id_drinks;
$this->params['breadcrumbs'][] = ['label' => 'Drinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="drinks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_drinks' => $model->id_drinks], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_drinks' => $model->id_drinks], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_drinks',
            'nazvanie',
            'id_groups',
            'cost_price',
            'price',
        ],
    ]) ?>

</div>
