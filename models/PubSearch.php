<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Search;

/**
 * PubSearch represents the model behind the search form of `app\models\Search`.
 */
class PubSearch extends Search
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pub'], 'integer'],
            [['namepub', 'descpub', 'datepub', 'authorpub', 'image'], 'safe'],
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
        $query = Search::find();

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
            'id_pub' => $this->id_pub,
            'datepub' => $this->datepub,
        ]);

        $query->andFilterWhere(['like', 'namepub', $this->namepub])
            ->andFilterWhere(['like', 'descpub', $this->descpub])
            ->andFilterWhere(['like', 'authorpub', $this->authorpub])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
