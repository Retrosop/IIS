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
		<?=Html::textInput('a','0',['placeholder' => 'Введите число a', 'size' => 12])?><br>
		<?=Html::textInput('b','0',['placeholder' => 'Введите число b', 'size' => 12])?><br>
		<?=Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
   <?php ActiveForm::end() ?>
   
   <div class="realcomment-index">
      <div id="realcomment-container" class="col-md-8 col-md-offset-2">
        <?= $this->render('_myajaxrezultpage',['rez'=>'','rezsumma'=>0]) 
		?>
    </div>
   </div>

   <?php
		$js = <<<JS
		$('form').on('beforeSubmit', function(){
			  var data = $(this).serialize();
			$.ajax({
				url: 'index.php?r=site/myajaxrezult',
				type: 'POST',
				data: data,
				success: function(res){
					console.log(res);
					//document.write(res);
				  $('#realcomment-container').html(res);
			   },
			   error: function(){
					alert('Error!');
				}
			});
			
		             //alert('Работает!');
		 return false;
		  
		  
		  
		});
		JS;
		  $this->registerJs($js);
	?>


 
  
</div>
