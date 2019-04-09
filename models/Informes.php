<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_informes".
 *
 * @property int $id
 * @property string $ci
 * @property int $id_medico
 * @property int $id_unidad
 * @property string $fechaconsulta
 * @property string $fechainfo
 * @property string $procedencia
 * @property string $motivo
 * @property string $descripcion
 * @property string $examenes
 * @property string $dx
 * @property string $tx
 * @property string $conducta
 * @property string $control
 * @property string $plan
 */
class Informes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_informes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ci', 'id_medico', 'id_unidad', 'fechainfo'], 'required'],
            [['id_medico', 'id_unidad'], 'integer'],
            [['fechaconsulta', 'fechainfo'], 'safe'],
            [['motivo', 'descripcion', 'examenes', 'dx', 'tx', 'conducta', 'control', 'plan'], 'string'],
            [['ci'], 'string', 'max' => 10],
            [['procedencia'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ci' => 'Ci',
            'id_medico' => 'Id Medico',
            'id_unidad' => 'Id Unidad',
            'fechaconsulta' => 'Fechaconsulta',
            'fechainfo' => 'Fechainfo',
            'procedencia' => 'Procedencia',
            'motivo' => 'Motivo',
            'descripcion' => 'Descripcion',
            'examenes' => 'Examenes',
            'dx' => 'Dx',
            'tx' => 'Tx',
            'conducta' => 'Conducta',
            'control' => 'Control',
            'plan' => 'Plan',
        ];
    }

    /**
     * {@inheritdoc}
     * @return InformesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InformesQuery(get_called_class());
    }
}
