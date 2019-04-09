<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Control]].
 *
 * @see Control
 */
class ControlQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Control[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Control|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
