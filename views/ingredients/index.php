<?php

use app\models\Ingredients;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\IngredientsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ingredients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingredients-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ingredients', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ingr',
            'cost_price',
            'unit_izmireniya',
            'nazvanie',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ingredients $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ingr' => $model->id_ingr]);
                 }
            ],
        ],
    ]); ?>


</div>
