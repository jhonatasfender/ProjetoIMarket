<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TelefoneSupermercado]].
 *
 * @see TelefoneSupermercado
 */
class TelefoneSupermercadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TelefoneSupermercado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TelefoneSupermercado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
