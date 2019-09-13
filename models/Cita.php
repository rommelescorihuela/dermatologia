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
 * @property string $hora 

 */
class Cita extends \yii\db\ActiveRecord
{
  public $cedula;
  public $nombrecompleto;
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
            [['fecha', 'id_medico','nombrecompleto'], 'required'],
            [['hora'], 'required'], 
           [['hora'], 'string', 'max' => 20],
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
            'id_medico' => 'Medico',
            'fecha' => 'Fecha',
            'hora' => 'Hora', 
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
