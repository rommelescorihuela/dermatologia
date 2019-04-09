<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_control".
 *
 * @property int $id
 * @property string $ci
 * @property string $id_unidad
 * @property string $fecha
 * @property string $pulso_long
 * @property string $pulso_cant
 * @property string $spot
 * @property string $fluencia
 * @property string $prespray
 * @property string $costo
 * @property string $area
 * @property string $dosimetria
 * @property string $tiempo
 * @property string $modo
 * @property string $r04
 * @property string $pilot
 * @property string $energia
 * @property string $frecuencia
 */
class Control extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_control';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_unidad'], 'required'],
            [['fecha'], 'safe'],
            [['ci', 'spot', 'fluencia', 'prespray', 'costo', 'dosimetria', 'modo', 'r04', 'pilot', 'energia', 'frecuencia'], 'string', 'max' => 10],
            [['id_unidad', 'pulso_cant'], 'string', 'max' => 2],
            [['pulso_long', 'tiempo'], 'string', 'max' => 3],
            [['area'], 'string', 'max' => 30],
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
            'id_unidad' => 'Id Unidad',
            'fecha' => 'Fecha',
            'pulso_long' => 'Pulso Long',
            'pulso_cant' => 'Pulso Cant',
            'spot' => 'Spot',
            'fluencia' => 'Fluencia',
            'prespray' => 'Prespray',
            'costo' => 'Costo',
            'area' => 'Area',
            'dosimetria' => 'Dosimetria',
            'tiempo' => 'Tiempo',
            'modo' => 'Modo',
            'r04' => 'R04',
            'pilot' => 'Pilot',
            'energia' => 'Energia',
            'frecuencia' => 'Frecuencia',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ControlQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ControlQuery(get_called_class());
    }
}
