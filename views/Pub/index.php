<?php

use app\models\Search;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PubSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Searches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Search', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pub',
            'namepub',
            'descpub',
            'datepub',
            'authorpub',
            //'image',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Search $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pub' => $model->id_pub]);
                 }
            ],
        ],
    ]); ?>


</div>
