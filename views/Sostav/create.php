<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sostav $model */

$this->title = 'Create Sostav';
$this->params['breadcrumbs'][] = ['label' => 'Sostavs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sostav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
