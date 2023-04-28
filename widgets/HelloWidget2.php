<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget2 extends Widget
{
    public $message;

    public function init() {
        parent::init();
        if (!is_null($this->message)) {
            return;
        }
        $hour = date('G');
        if ($hour >= 0 && $hour < 6) {
            $this->message = 'Доброй ночи! Виджет 2';
        } elseif ($hour >= 6 && $hour < 12) {
            $this->message = 'Доброе утро! Виджет 2';
        } elseif ($hour >= 12 && $hour < 18) {
            $this->message = 'Добрый день! Виджет 2';
        } else {
            $this->message = 'Добрый вечер! Виджет 2';
        }
		
	 }
	    public function run() {
           return $this->render('hello2', ['message' => $this->message]);
    }

}
