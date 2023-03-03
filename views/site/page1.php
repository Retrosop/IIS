<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My first page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  
    <p>
        Hello world !!! Передача переменной а<?=$par_a ?>
    </p>
	<form action="http://localhost/index.php?r=site/run" method="get">
	
	</form>
  
</div>

