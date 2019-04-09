<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_paciente".
 *
 * @property string $ci
 * @property string $nombre
 * @property string $apellido
 * @property string $fechanac
 * @property int $edad
 * @property string $edocivil
 * @property string $direccion
 * @property string $telefono1
 * @property string $telefono2
 * @property string $telefono3
 * @property string $correo
 * @property string $profesion
 * @property string $sexo
 * @property string $referencia
 * @property string $motivo
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_paciente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ci'], 'required'],
            [['edad'], 'integer'],
            [['ci', 'fechanac'], 'string', 'max' => 10],
            [['nombre', 'apellido', 'correo', 'profesion', 'referencia'], 'string', 'max' => 30],
            [['edocivil'], 'string', 'max' => 15],
            [['direccion', 'motivo'], 'string', 'max' => 150],
            [['telefono1', 'telefono2', 'telefono3'], 'string', 'max' => 13],
            [['sexo'], 'string', 'max' => 1],
            [['ci'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ci' => 'Ci',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'fechanac' => 'Fechanac',
            'edad' => 'Edad',
            'edocivil' => 'Edocivil',
            'direccion' => 'Direccion',
            'telefono1' => 'Telefono1',
            'telefono2' => 'Telefono2',
            'telefono3' => 'Telefono3',
            'correo' => 'Correo',
            'profesion' => 'Profesion',
            'sexo' => 'Sexo',
            'referencia' => 'Referencia',
            'motivo' => 'Motivo',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PacienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PacienteQuery(get_called_class());
    }
}
