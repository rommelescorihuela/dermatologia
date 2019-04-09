<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_unidades".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 */
class Unidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_unidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UnidadesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UnidadesQuery(get_called_class());
    }
}
