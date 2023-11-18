<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Ingredients $model */

$this->title = $model->id_ingr;
$this->params['breadcrumbs'][] = ['label' => 'Ingredients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ingredients-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ingr' => $model->id_ingr], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ingr' => $model->id_ingr], [
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
            'id_ingr',
            'cost_price',
            'unit_izmireniya',
            'nazvanie',
        ],
    ]) ?>

</div>
