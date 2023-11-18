<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sostav".
 *
 * @property int $id_sostav
 * @property int|null $id_dishes
 * @property int|null $id_ingr
 * @property int|null $kol_vo
 * @property int|null $cost_price
 *
 * @property Dishes $dishes
 * @property Ingredients $ingr
 */
class Sostav extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sostav';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dishes', 'id_ingr', 'kol_vo', 'cost_price'], 'integer'],
            [['id_dishes'], 'exist', 'skipOnError' => true, 'targetClass' => Dishes::class, 'targetAttribute' => ['id_dishes' => 'id_dishes']],
            [['id_ingr'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredients::class, 'targetAttribute' => ['id_ingr' => 'id_ingr']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sostav' => 'Id Sostav',
            'id_dishes' => 'Id Dishes',
            'id_ingr' => 'Id Ingr',
            'kol_vo' => 'Kol Vo',
            'cost_price' => 'Cost Price',
        ];
    }

    /**
     * Gets query for [[Dishes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDishes()
    {
        return $this->hasOne(Dishes::class, ['id_dishes' => 'id_dishes']);
    }

    /**
     * Gets query for [[Ingr]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngr()
    {
        return $this->hasOne(Ingredients::class, ['id_ingr' => 'id_ingr']);
    }
}
