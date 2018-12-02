<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Entrega]].
 *
 * @see Entrega
 */
class EntregaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Entrega[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Entrega|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
