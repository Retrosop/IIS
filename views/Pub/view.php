<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Search $model */

$this->title = $model->id_pub;
$this->params['breadcrumbs'][] = ['label' => 'Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="search-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pub' => $model->id_pub], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pub' => $model->id_pub], [
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
            'id_pub',
            'namepub',
            'descpub',
            'datepub',
            'authorpub',
            'image',
        ],
    ]) ?>

</div>
