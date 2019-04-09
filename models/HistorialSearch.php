<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Historial;

/**
 * HistorialSearch represents the model behind the search form of `app\models\Historial`.
 */
class HistorialSearch extends Historial
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_medico', 'id_unidad', 'costo', 'costo2'], 'integer'],
            [['ci', 'tipopiel', 'bx', 'bx_fecha', 'bx_patologo', 'fecha', 'mc', 'trata_recibido', 'trata_vo', 'trata_topico', 'dx', 'evolucion', 'efect_secun', 'procedencia', 'antecedeflia', 'antecedepers', 'exam_fisico', 'conducta', 'control', 'exam_para', 'area', 'descripcion'], 'safe'],
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
        $query = Historial::find();

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
            'bx_fecha' => $this->bx_fecha,
            'fecha' => $this->fecha,
            'costo' => $this->costo,
            'costo2' => $this->costo2,
        ]);

        $query->andFilterWhere(['like', 'ci', $this->ci])
            ->andFilterWhere(['like', 'tipopiel', $this->tipopiel])
            ->andFilterWhere(['like', 'bx', $this->bx])
            ->andFilterWhere(['like', 'bx_patologo', $this->bx_patologo])
            ->andFilterWhere(['like', 'mc', $this->mc])
            ->andFilterWhere(['like', 'trata_recibido', $this->trata_recibido])
            ->andFilterWhere(['like', 'trata_vo', $this->trata_vo])
            ->andFilterWhere(['like', 'trata_topico', $this->trata_topico])
            ->andFilterWhere(['like', 'dx', $this->dx])
            ->andFilterWhere(['like', 'evolucion', $this->evolucion])
            ->andFilterWhere(['like', 'efect_secun', $this->efect_secun])
            ->andFilterWhere(['like', 'procedencia', $this->procedencia])
            ->andFilterWhere(['like', 'antecedeflia', $this->antecedeflia])
            ->andFilterWhere(['like', 'antecedepers', $this->antecedepers])
            ->andFilterWhere(['like', 'exam_fisico', $this->exam_fisico])
            ->andFilterWhere(['like', 'conducta', $this->conducta])
            ->andFilterWhere(['like', 'control', $this->control])
            ->andFilterWhere(['like', 'exam_para', $this->exam_para])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
