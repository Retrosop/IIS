<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property int $id_groups
 * @property int|null $nazvanie
 *
 * @property Dishes[] $dishes
 * @property Drinks[] $drinks
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nazvanie'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_groups' => 'Id Groups',
            'nazvanie' => 'Nazvanie',
        ];
    }

    /**
     * Gets query for [[Dishes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDishes()
    {
        return $this->hasMany(Dishes::class, ['id_groups' => 'id_groups']);
    }

    /**
     * Gets query for [[Drinks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrinks()
    {
        return $this->hasMany(Drinks::class, ['id_groups' => 'id_groups']);
    }
}
