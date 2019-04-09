<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Informes;

/**
 * InformesSearch represents the model behind the search form of `app\models\Informes`.
 */
class InformesSearch extends Informes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_medico', 'id_unidad'], 'integer'],
            [['ci', 'fechaconsulta', 'fechainfo', 'procedencia', 'motivo', 'descripcion', 'examenes', 'dx', 'tx', 'conducta', 'control', 'plan'], 'safe'],
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
        $query = Informes::find();

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
            'id_medico' => $this->id_medico,
            'id_unidad' => $this->id_unidad,
            'fechaconsulta' => $this->fechaconsulta,
            'fechainfo' => $this->fechainfo,
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'procedencia', $this->procedencia])
            ->andFilterWhere(['like', 'motivo', $this->motivo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'examenes', $this->examenes])
            ->andFilterWhere(['like', 'dx', $this->dx])
            ->andFilterWhere(['like', 'tx', $this->tx])
            ->andFilterWhere(['like', 'conducta', $this->conducta])
            ->andFilterWhere(['like', 'control', $this->control])
            ->andFilterWhere(['like', 'plan', $this->plan]);

        return $dataProvider;
    }
}
