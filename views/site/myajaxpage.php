<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My first ajax';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
      
   <h2>Мой первый ajax</h2>
   
   <?php $form = ActiveForm::begin() ?>
		<?=Html::textInput('a','100')?><br>
		<?=Html::textInput('b','23')?><br>
		<?=Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
   <?php ActiveForm::end() ?>

   <?php
		$js = <<<JS
		$('form').on('beforeSubmit', function(){
			  var data = $(this).serialize();
			$.ajax({
				url: 'index.php?r=site/myajaxrezult',
				type: 'POST',
				data: data,
				success: function(res){
					document.write(res);
			   },
			   error: function(){
					alert('Error!');
				}
			});
			
		  alert('Работает!');
		//  return false;
		  
		  
		  
		});
		JS;
		  $this->registerJs($js);
	?>


 
  
</div>
