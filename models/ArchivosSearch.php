<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Archivos;

/**
 * ArchivosSearch represents the model behind the search form of `app\models\Archivos`.
 */
class ArchivosSearch extends Archivos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idarc', 'id_unidad'], 'integer'],
            [['id_paciente', 'fecha', 'archivo'], 'safe'],
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
        $query = Archivos::find();

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
            'idarc' => $this->idarc,
            'id_unidad' => $this->id_unidad,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'id_paciente', $this->id_paciente])
            ->andFilterWhere(['like', 'archivo', $this->archivo]);

        return $dataProvider;
    }
}
