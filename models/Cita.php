<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_cita".
 *
 * @property int $id
 * @property int $id_paciente
 * @property int $id_medico
 * @property string $fecha
 * @property string $status
 */
class Cita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_cita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paciente', 'id_medico'], 'integer'],
            [['fecha'], 'safe'],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_paciente' => 'Id Paciente',
            'id_medico' => 'Id Medico',
            'fecha' => 'Fecha',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CitaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CitaQuery(get_called_class());
    }
}
