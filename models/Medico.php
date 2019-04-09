<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_medico".
 *
 * @property int $id
 * @property string $usuario
 * @property int $id_unidad
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono1
 * @property string $telefono2
 */
class Medico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unidad'], 'integer'],
            [['usuario'], 'string', 'max' => 15],
            [['nombre', 'apellido'], 'string', 'max' => 30],
            [['telefono1', 'telefono2'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuario' => 'Usuario',
            'id_unidad' => 'Id Unidad',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'telefono1' => 'Telefono1',
            'telefono2' => 'Telefono2',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MedicoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MedicoQuery(get_called_class());
    }
}
