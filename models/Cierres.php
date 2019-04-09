<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_cierres".
 *
 * @property int $id
 * @property string $ci
 * @property string $procedi
 * @property string $aval
 * @property int $monto
 * @property string $fdp formade pago
 * @property string $obs
 * @property string $tipo D: dermo L:laser
 * @property string $fecha
 */
class Cierres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_cierres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ci', 'aval', 'fecha'], 'required'],
            [['monto'], 'integer'],
            [['fecha'], 'safe'],
            [['ci'], 'string', 'max' => 10],
            [['procedi', 'aval', 'obs'], 'string', 'max' => 100],
            [['fdp'], 'string', 'max' => 5],
            [['tipo'], 'string', 'max' => 1],
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
            'procedi' => 'Procedi',
            'aval' => 'Aval',
            'monto' => 'Monto',
            'fdp' => 'Fdp',
            'obs' => 'Obs',
            'tipo' => 'Tipo',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CierresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CierresQuery(get_called_class());
    }
}
