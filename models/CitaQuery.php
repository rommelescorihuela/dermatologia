<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cita]].
 *
 * @see Cita
 */
class CitaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cita[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cita|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
