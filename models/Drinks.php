<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drinks".
 *
 * @property int $id_drinks
 * @property int|null $nazvanie
 * @property int|null $id_groups
 * @property int|null $cost_price
 * @property int|null $price
 *
 * @property Groups $groups
 * @property ZakazMenu[] $zakazMenus
 */
class Drinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drinks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nazvanie', 'id_groups', 'cost_price', 'price'], 'integer'],
            [['id_groups'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::class, 'targetAttribute' => ['id_groups' => 'id_groups']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_drinks' => 'Id Drinks',
            'nazvanie' => 'Nazvanie',
            'id_groups' => 'Id Groups',
            'cost_price' => 'Cost Price',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Groups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasOne(Groups::class, ['id_groups' => 'id_groups']);
    }

    /**
     * Gets query for [[ZakazMenus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazMenus()
    {
        return $this->hasMany(ZakazMenu::class, ['id_drinks' => 'id_drinks']);
    }
}
