<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $idgoods
 * @property string|null $name
 * @property int|null $cena
 * @property string|null $cat
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cena'], 'integer'],
            [['name', 'cat'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idgoods' => 'Idgoods',
            'name' => 'Name',
            'cena' => 'Cena',
            'cat' => 'Cat',
        ];
    }
}
