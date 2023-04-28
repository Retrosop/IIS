<?php
/*
 * Файл app/views/hello3.php
 */
use yii\helpers\Html;
?>
<h1 class="hello"><?= Html::encode($message); ?></h1>
<p><?= Html::encode($content); ?></p>
<?
$fModel = (object)['title'=> 'Framework', 'image' => 'https://www.yiiframework.com/image/logo.svg'];
?>
<h4>
    <?=$fModel->title ?>
</h4>
<div>
    <img src="<?=$fModel->image ?>">
</div>
<div>
	<a class="up-vote">
		<i class="fa fa-thumbs-o-up"></i>
	</a>
	 &nbsp;&nbsp;&nbsp;&nbsp;
	<a class="down-vote">
		<i class="fa fa-thumbs-o-down"></i>
	</a>
</div>

