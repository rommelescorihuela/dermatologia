<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_historial".
 *
 * @property int $id
 * @property string $ci
 * @property int $id_medico
 * @property int $id_unidad
 * @property string $tipopiel
 * @property string $bx
 * @property string $bx_fecha
 * @property string $bx_patologo
 * @property string $fecha
 * @property string $mc
 * @property string $trata_recibido
 * @property string $trata_vo
 * @property string $trata_topico
 * @property string $dx
 * @property string $evolucion
 * @property string $efect_secun
 * @property string $procedencia
 * @property string $antecedeflia
 * @property string $antecedepers
 * @property string $exam_fisico
 * @property string $conducta
 * @property string $control
 * @property string $exam_para
 * @property string $area
 * @property int $costo
 * @property int $costo2
 * @property string $descripcion
 */
class Historial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_historial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ci', 'id_medico', 'id_unidad'], 'required'],
            [['id_medico', 'id_unidad', 'costo', 'costo2'], 'integer'],
            [['bx_fecha', 'fecha'], 'safe'],
            [['mc', 'trata_recibido', 'trata_vo', 'trata_topico', 'dx', 'evolucion', 'efect_secun', 'antecedeflia', 'antecedepers', 'exam_fisico', 'conducta', 'control', 'exam_para', 'descripcion'], 'string'],
            [['ci'], 'string', 'max' => 10],
            [['tipopiel', 'bx'], 'string', 'max' => 15],
            [['bx_patologo'], 'string', 'max' => 30],
            [['procedencia'], 'string', 'max' => 1],
            [['area'], 'string', 'max' => 3],
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
            'tipopiel' => 'Tipopiel',
            'bx' => 'Bx',
            'bx_fecha' => 'Bx Fecha',
            'bx_patologo' => 'Bx Patologo',
            'fecha' => 'Fecha',
            'mc' => 'Mc',
            'trata_recibido' => 'Trata Recibido',
            'trata_vo' => 'Trata Vo',
            'trata_topico' => 'Trata Topico',
            'dx' => 'Dx',
            'evolucion' => 'Evolucion',
            'efect_secun' => 'Efect Secun',
            'procedencia' => 'Procedencia',
            'antecedeflia' => 'Antecedeflia',
            'antecedepers' => 'Antecedepers',
            'exam_fisico' => 'Exam Fisico',
            'conducta' => 'Conducta',
            'control' => 'Control',
            'exam_para' => 'Exam Para',
            'area' => 'Area',
            'costo' => 'Costo',
            'costo2' => 'Costo2',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * {@inheritdoc}
     * @return HistorialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HistorialQuery(get_called_class());
    }
}
