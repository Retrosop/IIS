<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dishes".
 *
 * @property int $id_dishes
 * @property int $Id_groups
 * @property int $price
 * @property int $natcenka
 * @property string|null $nazvanie
 * @property int|null $cost_price
 */
class Dishes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dishes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_groups', 'price', 'natcenka', 'cost_price'], 'integer'],
            [['nazvanie'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dishes' => 'Id Dishes',
            'Id_groups' => 'Id Groups',
            'price' => 'Price',
            'natcenka' => 'Natcenka',
            'nazvanie' => 'Nazvanie',
            'cost_price' => 'Cost Price',
        ];
    }
}
