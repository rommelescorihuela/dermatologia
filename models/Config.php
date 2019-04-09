<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_config".
 *
 * @property int $id
 * @property int $ncitasxdia
 * @property string $servidor
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ncitasxdia', 'servidor'], 'required'],
            [['ncitasxdia'], 'integer'],
            [['servidor'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ncitasxdia' => 'Ncitasxdia',
            'servidor' => 'Servidor',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ConfigQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConfigQuery(get_called_class());
    }
}
