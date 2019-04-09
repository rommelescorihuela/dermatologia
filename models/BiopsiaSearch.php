<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Biopsia;

/**
 * BiopsiaSearch represents the model behind the search form of `app\models\Biopsia`.
 */
class BiopsiaSearch extends Biopsia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'monto', 'id_biopsia'], 'integer'],
            [['fecha_entrega', 'ci', 'fecha_recibido', 'cancelado'], 'safe'],
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
        $query = Biopsia::find();

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
            'fecha_entrega' => $this->fecha_entrega,
            'monto' => $this->monto,
            'id_biopsia' => $this->id_biopsia,
            'fecha_recibido' => $this->fecha_recibido,
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'cancelado', $this->cancelado]);

        return $dataProvider;
    }
}
