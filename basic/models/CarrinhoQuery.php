<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Carrinho]].
 *
 * @see Carrinho
 */
class CarrinhoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Carrinho[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Carrinho|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
