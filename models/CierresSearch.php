<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cierres;

/**
 * CierresSearch represents the model behind the search form of `app\models\Cierres`.
 */
class CierresSearch extends Cierres
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'monto'], 'integer'],
            [['ci', 'procedi', 'aval', 'fdp', 'obs', 'tipo', 'fecha'], 'safe'],
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
        $query = Cierres::find();

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
            'monto' => $this->monto,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'procedi', $this->procedi])
            ->andFilterWhere(['like', 'aval', $this->aval])
            ->andFilterWhere(['like', 'fdp', $this->fdp])
            ->andFilterWhere(['like', 'obs', $this->obs])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
