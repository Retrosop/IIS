<?php

use yii\bootstrap5\Html;

if (yii::$app->language=='ru'){
	echo Html::a('Go to English',
	array_merge(yii::$app->request->get(),[yii::$app->controller->route,'language'=>'en']));
}
else {
	echo Html::a('Переход на Русский',
	array_merge(yii::$app->request->get(),[yii::$app->controller->route,'language'=>'ru']));
}