<?php

use app\models\Sostav;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SostavSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sostavs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sostav-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sostav', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sostav',
            'id_dishes',
            'id_ingr',
            'kol_vo',
            'cost_price',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sostav $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_sostav' => $model->id_sostav]);
                 }
            ],
        ],
    ]); ?>


</div>
