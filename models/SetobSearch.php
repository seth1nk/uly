<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Setob;

/**
 * SetobSearch represents the model behind the search form of `app\models\Setob`.
 */
class SetobSearch extends Setob
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['название', 'IP_адрес', 'MAC_адрес', 'местоположение', 'дата_установки'], 'safe'],
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
        $query = Setob::find();

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
            'id' => $this->id,
            'дата_установки' => $this->дата_установки,
        ]);

        $query->andFilterWhere(['like', 'название', $this->название])
            ->andFilterWhere(['like', 'IP_адрес', $this->IP_адрес])
            ->andFilterWhere(['like', 'MAC_адрес', $this->MAC_адрес])
            ->andFilterWhere(['like', 'местоположение', $this->местоположение]);

        return $dataProvider;
    }
}
