<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingredients".
 *
 * @property int $id_ingr
 * @property int|null $cost_price
 * @property int|null $unit_izmireniya
 * @property string|null $nazvanie
 */
class Ingredients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost_price', 'unit_izmireniya'], 'integer'],
            [['nazvanie'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ingr' => 'Id Ingr',
            'cost_price' => 'Cost Price',
            'unit_izmireniya' => 'Unit Izmireniya',
            'nazvanie' => 'Nazvanie',
        ];
    }
}
