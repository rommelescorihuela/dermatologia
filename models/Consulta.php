<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_consulta".
 *
 * @property int $id
 * @property int $id_medico
 * @property int $id_historial
 * @property int $id_paciente
 */
class Consulta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_consulta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_medico', 'id_historial', 'id_paciente'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_medico' => 'Id Medico',
            'id_historial' => 'Id Historial',
            'id_paciente' => 'Id Paciente',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ConsultaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConsultaQuery(get_called_class());
    }
}
