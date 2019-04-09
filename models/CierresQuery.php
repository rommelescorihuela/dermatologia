<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cierres]].
 *
 * @see Cierres
 */
class CierresQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cierres[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cierres|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
