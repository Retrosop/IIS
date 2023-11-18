<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sostav;

/**
 * SostavSearch represents the model behind the search form of `app\models\Sostav`.
 */
class SostavSearch extends Sostav
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sostav', 'id_dishes', 'id_ingr', 'kol_vo', 'cost_price'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sostav::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_sostav' => $this->id_sostav,
            'id_dishes' => $this->id_dishes,
            'id_ingr' => $this->id_ingr,
            'kol_vo' => $this->kol_vo,
            'cost_price' => $this->cost_price,
        ]);

        return $dataProvider;
    }
}
