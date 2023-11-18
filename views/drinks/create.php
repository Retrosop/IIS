<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\drinks $model */

$this->title = 'Create Drinks';
$this->params['breadcrumbs'][] = ['label' => 'Drinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drinks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
