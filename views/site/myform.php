<?php

/** @var yii\web\View $this */

use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>
<div class="site-about">
      
   <h2>Информация о странице</h2>
   <div>
      <?php $form = ActiveForm::begin(); ?>
        <?=$form->field($model, 'name')->textInput()->label('Имя, Фамилия');?>
        <?=$form->field($model, 'email')->input('email')->label('Адрес почты');?>
        <?=$form->field($model, 'body')->textarea(['rows' => 5])->label('Ваше сообщение');?>
        <?
		//=Html::submitButton('Отправить', ['class' => 'btn btn-primary']); 
		?>
		<?
		//=Html::textInput('a','0',['placeholder' => 'Введите число a', 'size' => 12])
		?><br>
		<?
		//=Html::textInput('b','0',['placeholder' => 'Введите число b', 'size' => 12])
		?><br>
		<?=Html::submitButton('Отправить', ['class' => 'btn btn-success']) 	?>
    <?php ActiveForm::end(); ?>

   </div>
</div>
