<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Public".
 *
 * @property int $id_pub
 * @property string $namepub
 * @property string $descpub
 * @property string $datepub
 * @property string $authorpub
 * @property string $image
 */
class Search extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Public';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namepub', 'descpub', 'datepub', 'authorpub', 'image'], 'required'],
            [['datepub'], 'safe'],
            [['namepub', 'authorpub', 'image'], 'string', 'max' => 256],
            [['descpub'], 'string', 'max' => 5000],
            [['namepub'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pub' => 'Id Pub',
            'namepub' => 'Namepub',
            'descpub' => 'Descpub',
            'datepub' => 'Datepub',
            'authorpub' => 'Authorpub',
            'image' => 'Image',
        ];
    }
}
