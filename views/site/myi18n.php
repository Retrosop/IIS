<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-i18n">

	<?php
	
	   echo '<b> Пример вывода 1 </b><br>';
		$textname = 'Мир';
		echo \Yii::t('app', 'Hello, {textname}!', [
			'textname' => \Yii::t('app',$textname),
		]);
		
		echo '<br><b> Пример вывода 2 </b><br>';
		
		echo \Yii::t('app','Мир');
	?>
   
</div>
