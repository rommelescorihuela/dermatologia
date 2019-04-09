<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Presupuestos;

/**
 * PresupuestosSearch represents the model behind the search form of `app\models\Presupuestos`.
 */
class PresupuestosSearch extends Presupuestos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ci', 'id_medico', 'id_unidad', 'fechaconsulta', 'fechapresupuesto', 'dx', 'plan', 'areas', 'sesiones', 'costosesion', 'aktilite', 'metvix', 'cirujano', 'ayudante', 'equipo', 'botox', 'biopsia', 'total'], 'safe'],
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
        $query = Presupuestos::find();

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
            'fechaconsulta' => $this->fechaconsulta,
            'fechapresupuesto' => $this->fechapresupuesto,
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'id_medico', $this->id_medico])
            ->andFilterWhere(['like', 'id_unidad', $this->id_unidad])
            ->andFilterWhere(['like', 'dx', $this->dx])
            ->andFilterWhere(['like', 'plan', $this->plan])
            ->andFilterWhere(['like', 'areas', $this->areas])
            ->andFilterWhere(['like', 'sesiones', $this->sesiones])
            ->andFilterWhere(['like', 'costosesion', $this->costosesion])
            ->andFilterWhere(['like', 'aktilite', $this->aktilite])
            ->andFilterWhere(['like', 'metvix', $this->metvix])
            ->andFilterWhere(['like', 'cirujano', $this->cirujano])
            ->andFilterWhere(['like', 'ayudante', $this->ayudante])
            ->andFilterWhere(['like', 'equipo', $this->equipo])
            ->andFilterWhere(['like', 'botox', $this->botox])
            ->andFilterWhere(['like', 'biopsia', $this->biopsia])
            ->andFilterWhere(['like', 'total', $this->total]);

        return $dataProvider;
    }
}
