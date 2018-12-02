<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UnidadeMedida]].
 *
 * @see UnidadeMedida
 */
class UnidadeMedidaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return UnidadeMedida[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return UnidadeMedida|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
