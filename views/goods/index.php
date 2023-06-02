<?php

use app\models\Goods;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\GoodsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idgoods',
            'name',
            'cena',
            'cat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Goods $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idgoods' => $model->idgoods]);
                 }
            ],
        ],
    ]); ?>


</div>
