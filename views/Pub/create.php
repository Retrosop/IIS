<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Search $model */

$this->title = 'Create Search';
$this->params['breadcrumbs'][] = ['label' => 'Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
