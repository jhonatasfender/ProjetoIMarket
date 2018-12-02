<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ProdutoEstoque]].
 *
 * @see ProdutoEstoque
 */
class ProdutoEstoqueQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ProdutoEstoque[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ProdutoEstoque|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
