<?php
namespace app\widgets;

use yii\base\Widget;

class HelloWidget3 extends Widget
{
    public $message;

    public function init() {
        parent::init();
        if (is_null($this->message)) {
            $this->message = 'Добрый день! Виджет 3';
        }
        ob_start();
    }

    public function run() {
        $content = ob_get_clean();
		$fontawesome_url = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css';
        $this->getView()->registerCssFile($fontawesome_url, [], 'hello3-fontawesome');
		
        return $this->render(
            'hello3',
            [
                'message' => $this->message,
                'content' => $content
            ]
        );
    }
}



