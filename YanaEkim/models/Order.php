<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $idorder
 * @property string|null $name
 * @property string|null $enail
 * @property string|null $subject
 * @property string|null $body
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'enail', 'subject', 'body'], 'string', 'max' => 50],
			[['name', 'enail', 'subject', 'body'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idorder' => 'Idorder',
            'name' => 'Ваше фио',
            'enail' => 'Ваше емайл',
            'subject' => 'Дата бронирования',
            'body' => 'Самолет и т.д',
        ];
    }
}
