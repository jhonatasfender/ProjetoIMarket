<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[EnderecoSupermercado]].
 *
 * @see EnderecoSupermercado
 */
class DepartamentoProdutoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return EnderecoSupermercado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return EnderecoSupermercado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
