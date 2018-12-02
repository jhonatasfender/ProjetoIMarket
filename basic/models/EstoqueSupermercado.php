<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estoquesupermercado".
 *
 * @property int $codSupermercado
 * @property int $codProdutoEstoque
 *
 * @property Supermercado $codSupermercado0
 */
class EstoqueSupermercado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estoquesupermercado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codProdutoEstoque'], 'required'],
            [['codProdutoEstoque'], 'integer'],
            [['codSupermercado'], 'exist', 'skipOnError' => true, 'targetClass' => Supermercado::className(), 'targetAttribute' => ['codSupermercado' => 'codSupermercado']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codSupermercado' => Yii::t('app', 'Cod Supermercado'),
            'codProdutoEstoque' => Yii::t('app', 'Cod Produto Estoque'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodSupermercado0()
    {
        return $this->hasOne(Supermercado::className(), ['codSupermercado' => 'codSupermercado']);
    }

    /**
     * {@inheritdoc}
     * @return EstoquesupermercadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EstoquesupermercadoQuery(get_called_class());
    }
}
