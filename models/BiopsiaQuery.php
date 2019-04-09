<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Biopsia]].
 *
 * @see Biopsia
 */
class BiopsiaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Biopsia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Biopsia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
