<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_presupuestos".
 *
 * @property int $id
 * @property string $ci
 * @property string $id_medico
 * @property string $id_unidad
 * @property string $fechaconsulta
 * @property string $fechapresupuesto
 * @property string $dx
 * @property string $plan
 * @property string $areas
 * @property string $sesiones
 * @property string $costosesion
 * @property string $aktilite
 * @property string $metvix
 * @property string $cirujano
 * @property string $ayudante
 * @property string $equipo
 * @property string $botox
 * @property string $biopsia
 * @property string $total
 */
class Presupuestos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_presupuestos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ci', 'id_medico', 'id_unidad', 'fechaconsulta', 'fechapresupuesto'], 'required'],
            [['fechaconsulta', 'fechapresupuesto'], 'safe'],
            [['ci'], 'string', 'max' => 10],
            [['id_medico', 'id_unidad'], 'string', 'max' => 2],
            [['dx'], 'string', 'max' => 150],
            [['plan'], 'string', 'max' => 500],
            [['areas'], 'string', 'max' => 50],
            [['sesiones'], 'string', 'max' => 3],
            [['costosesion', 'aktilite', 'metvix', 'cirujano', 'ayudante', 'equipo', 'botox', 'biopsia', 'total'], 'string', 'max' => 7],
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
            'fechapresupuesto' => 'Fechapresupuesto',
            'dx' => 'Dx',
            'plan' => 'Plan',
            'areas' => 'Areas',
            'sesiones' => 'Sesiones',
            'costosesion' => 'Costosesion',
            'aktilite' => 'Aktilite',
            'metvix' => 'Metvix',
            'cirujano' => 'Cirujano',
            'ayudante' => 'Ayudante',
            'equipo' => 'Equipo',
            'botox' => 'Botox',
            'biopsia' => 'Biopsia',
            'total' => 'Total',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PresupuestosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PresupuestosQuery(get_called_class());
    }
}
