<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Control;

/**
 * ControlSearch represents the model behind the search form of `app\models\Control`.
 */
class ControlSearch extends Control
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ci', 'id_unidad', 'fecha', 'pulso_long', 'pulso_cant', 'spot', 'fluencia', 'prespray', 'costo', 'area', 'dosimetria', 'tiempo', 'modo', 'r04', 'pilot', 'energia', 'frecuencia'], 'safe'],
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
        $query = Control::find();

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
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'id_unidad', $this->id_unidad])
            ->andFilterWhere(['like', 'pulso_long', $this->pulso_long])
            ->andFilterWhere(['like', 'pulso_cant', $this->pulso_cant])
            ->andFilterWhere(['like', 'spot', $this->spot])
            ->andFilterWhere(['like', 'fluencia', $this->fluencia])
            ->andFilterWhere(['like', 'prespray', $this->prespray])
            ->andFilterWhere(['like', 'costo', $this->costo])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'dosimetria', $this->dosimetria])
            ->andFilterWhere(['like', 'tiempo', $this->tiempo])
            ->andFilterWhere(['like', 'modo', $this->modo])
            ->andFilterWhere(['like', 'r04', $this->r04])
            ->andFilterWhere(['like', 'pilot', $this->pilot])
            ->andFilterWhere(['like', 'energia', $this->energia])
            ->andFilterWhere(['like', 'frecuencia', $this->frecuencia]);

        return $dataProvider;
    }
}
