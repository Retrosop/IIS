<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Dishes $model */

$this->title = $model->id_dishes;
$this->params['breadcrumbs'][] = ['label' => 'Dishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dishes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_dishes' => $model->id_dishes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_dishes' => $model->id_dishes], [
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
            'id_dishes',
            'id_groups',
            'price',
            'natcenka',
            'nazvanie',
            'cost_price',
        ],
    ]) ?>

</div>
