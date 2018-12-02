<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TelefoneCliente]].
 *
 * @see TelefoneCliente
 */
class TelefoneClienteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TelefoneCliente[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TelefoneCliente|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
