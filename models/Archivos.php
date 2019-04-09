<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_archivos".
 *
 * @property int $idarc
 * @property string $id_paciente
 * @property int $id_unidad
 * @property string $fecha
 * @property string $archivo
 */
class Archivos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_archivos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paciente', 'id_unidad', 'fecha', 'archivo'], 'required'],
            [['id_unidad'], 'integer'],
            [['fecha'], 'safe'],
            [['id_paciente'], 'string', 'max' => 12],
            [['archivo'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idarc' => 'Idarc',
            'id_paciente' => 'Id Paciente',
            'id_unidad' => 'Id Unidad',
            'fecha' => 'Fecha',
            'archivo' => 'Archivo',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ArchivosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArchivosQuery(get_called_class());
    }
}
