<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Informes]].
 *
 * @see Informes
 */
class InformesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Informes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Informes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
