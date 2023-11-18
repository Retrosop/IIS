<?php

use app\models\drinks;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\drinksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Drinks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drinks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Drinks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_drinks',
            'nazvanie',
            'id_groups',
            'cost_price',
            'price',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, drinks $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_drinks' => $model->id_drinks]);
                 }
            ],
        ],
    ]); ?>


</div>
