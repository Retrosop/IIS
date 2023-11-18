<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "waiter".
 *
 * @property int $id_waiters
 * @property string|null $F.I.O
 */
class Waiter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'waiter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['F.I.O'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_waiters' => 'Id Waiters',
            'F.I.O' => 'F I O',
        ];
    }
}
