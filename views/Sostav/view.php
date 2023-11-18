<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Sostav $model */

$this->title = $model->id_sostav;
$this->params['breadcrumbs'][] = ['label' => 'Sostavs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sostav-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_sostav' => $model->id_sostav], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_sostav' => $model->id_sostav], [
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
            'id_sostav',
            'id_dishes',
            'id_ingr',
            'kol_vo',
            'cost_price',
        ],
    ]) ?>

</div>
