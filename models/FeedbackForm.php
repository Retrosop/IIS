<?php
/*
 * Файл models/FeedbackForm.php
 */
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Модель для формы обратной связи
 */
class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $body;
}
