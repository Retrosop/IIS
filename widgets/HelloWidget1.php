<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget1 extends Widget
{
    public $message;


    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Добрый день! Виджет 1';
        }
    }

    public function run() {
        return '<h1>'.Html::encode($this->message).'</h1>';
    }
}
