<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
      
  <?php $form = ActiveForm::begin() ?>
		<?=Html::textInput('namediplom','0',['placeholder' => 'Введите название диплом', 'size' => 12])?><br>
		<?=Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
   <?php ActiveForm::end() ?>
   

   <?
     $a='';
	 //print_r($p3);
     foreach ($p3 as $pvlue) {
		$a=$a.$pvlue['id'].' '.$pvlue['name'].'<br>';	
     }
	 echo $a;
	 
	 
   ?>
   
</div>
