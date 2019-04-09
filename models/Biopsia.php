<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_biopsia".
 *
 * @property int $id
 * @property string $fecha_entrega
 * @property string $ci
 * @property int $monto
 * @property int $id_biopsia
 * @property string $fecha_recibido
 * @property string $cancelado
 */
class Biopsia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_biopsia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_entrega', 'ci'], 'required'],
            [['fecha_entrega', 'fecha_recibido'], 'safe'],
            [['monto', 'id_biopsia'], 'integer'],
            [['ci'], 'string', 'max' => 10],
            [['cancelado'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_entrega' => 'Fecha Entrega',
            'ci' => 'Ci',
            'monto' => 'Monto',
            'id_biopsia' => 'Id Biopsia',
            'fecha_recibido' => 'Fecha Recibido',
            'cancelado' => 'Cancelado',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BiopsiaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BiopsiaQuery(get_called_class());
    }
}
