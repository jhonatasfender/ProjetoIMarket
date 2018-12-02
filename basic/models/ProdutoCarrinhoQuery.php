<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ProdutoCarrinho]].
 *
 * @see ProdutoCarrinho
 */
class ProdutoCarrinhoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ProdutoCarrinho[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ProdutoCarrinho|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
