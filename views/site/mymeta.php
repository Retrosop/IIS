<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
      
   <h2>Информация о странице</h2>
   <div>
     <?=Yii::$app->params['myPar']?>
   </div>
</div>
