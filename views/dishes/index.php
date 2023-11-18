<?php

use app\models\Dishes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DishesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dishes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dishes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dishes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dishes',
            'id_groups',
            'price',
            'natcenka',
            'nazvanie',
            //'cost_price',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dishes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_dishes' => $model->id_dishes]);
                 }
            ],
        ],
    ]); ?>


</div>
