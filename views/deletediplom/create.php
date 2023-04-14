<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Deletediplom $model */

$this->title = 'Create Deletediplom';
$this->params['breadcrumbs'][] = ['label' => 'Deletediploms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deletediplom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
