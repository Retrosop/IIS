<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My first page with POST and GET';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
   
    <p>
        Передача параметров GET
    </p>
    <?php $form = ActiveForm::begin([
         'options' => ['class' => 'col s12'],
		 'id' => 'search-form',
         'action' => 'site/search',
		 'method' => 'get',
         'enableClientValidation' => false,
         'enableAjaxValidation' => false
    ]); ?>

    <?
	//= $form->field($searchModel, 'request')->label(false)->textInput(['placeholder' => 'Search', 'size' => 12])
	?>
	<?=Html::textInput('mytext','textname',['placeholder' => 'Search', 'size' => 12])?><br>
	
	<?= Html::radio('agree', false, ['label' => 'Я согласен']) ?><br>
	<?= Html::radio('agree', true, ['label' => 'Не согласен']) ?><br>
	<?= Html::radio('agree', false, ['label' => 'Воздержался']) ?><br>
    <?
	//= Html::activeRadio($model, 'agree', ['class' => 'agreement']) 
	?>

    <?= Html::checkbox('agree', true, ['label' => 'Я согласен']) ?><br>
    <?
	//= Html::activeCheckbox($model, 'agree', ['class' => 'agreement']) 
	?>
   

  
    <?= Html::resetButton('Сбросить', ['class' => 'reset']) ?><br>
	

	
	<div class="form-group">
        <?= Html::submitButton('Отправить GET Запрос', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	
	<?= Html::button('Нажми меня!', ['class' => 'teaser']) ?><br>
	
    <p>
        Hello world !!! Передача переменной а<?=$par_a ?>
    </p>
	<form action="http://localhost/index.php?r=site/run" method="get">
	
	</form>
  
</div>

