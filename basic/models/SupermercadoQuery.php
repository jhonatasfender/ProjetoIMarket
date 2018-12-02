<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Supermercado]].
 *
 * @see Supermercado
 */
class SupermercadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Supermercado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Supermercado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
