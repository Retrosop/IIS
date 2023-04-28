<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\widgets\HelloWidget1;
use app\widgets\HelloWidget2;
use app\widgets\HelloWidget3;


$this->title = 'My first widjet';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>


   
      
  Мои первые виджеты(widget)
   
   
   </div>

<div class="page-index">
    <b>Пример работы Виджет 1</b>
    <?= HelloWidget1::widget(['message' => 'Привет мир! Виджет 1']); ?> <br>
	<?= HelloWidget1::widget(); ?><br>
	<b>Пример работы Виджет 2</b>
	<?= HelloWidget2::widget(['message' => 'Привет мир! Виджет 2']); ?><br>
	<?= HelloWidget2::widget(); ?><br>
	<b>Пример работы Виджет 3</b>
	<?= HelloWidget3::widget(['message' => 'Привет мир! Виджет 3']); ?><br>
	<?= HelloWidget3::widget(); ?><br>
	
    <b>Пример работы Виджет 3 c форматированием</b>
	<div class="page-index">
		<?php HelloWidget3::begin(); ?>
		    Text between begin and end:
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			
		<?php HelloWidget3::end(); ?>
	</div>
	<div class="page-index">
		<h1 class="hello">Добрый день! Виджет 3 </h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</div>

</div>

  
</div>
