<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ingredients;

/**
 * IngredientsSearch represents the model behind the search form of `app\models\Ingredients`.
 */
class IngredientsSearch extends Ingredients
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ingr', 'cost_price', 'unit_izmireniya'], 'integer'],
            [['nazvanie'], 'safe'],
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
        $query = Ingredients::find();

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
            'id_ingr' => $this->id_ingr,
            'cost_price' => $this->cost_price,
            'unit_izmireniya' => $this->unit_izmireniya,
        ]);

        $query->andFilterWhere(['like', 'nazvanie', $this->nazvanie]);

        return $dataProvider;
    }
}
