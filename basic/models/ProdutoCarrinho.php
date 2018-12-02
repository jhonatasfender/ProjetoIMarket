<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtoCarrinho".
 *
 * @property int $carrinho_codCarrinho
 * @property int $produto_codProduto
 * @property int $quantidade
 *
 * @property Carrinho $carrinhoCodCarrinho
 * @property Produto $produtoCodProduto
 */
class ProdutoCarrinho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtoCarrinho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['carrinho_codCarrinho', 'produto_codProduto', 'quantidade'], 'required'],
            [['carrinho_codCarrinho', 'produto_codProduto', 'quantidade'], 'integer'],
            [['carrinho_codCarrinho', 'produto_codProduto'], 'unique', 'targetAttribute' => ['carrinho_codCarrinho', 'produto_codProduto']],
            [['carrinho_codCarrinho'], 'exist', 'skipOnError' => true, 'targetClass' => Carrinho::className(), 'targetAttribute' => ['carrinho_codCarrinho' => 'codCarrinho']],
            [['produto_codProduto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['produto_codProduto' => 'codProduto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'carrinho_codCarrinho' => Yii::t('app', 'Carrinho Cod Carrinho'),
            'produto_codProduto' => Yii::t('app', 'Produto Cod Produto'),
            'quantidade' => Yii::t('app', 'Quantidade'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhoCodCarrinho()
    {
        return $this->hasOne(Carrinho::className(), ['codCarrinho' => 'carrinho_codCarrinho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoCodProduto()
    {
        return $this->hasOne(Produto::className(), ['codProduto' => 'produto_codProduto']);
    }

    /**
     * {@inheritdoc}
     * @return ProdutoCarrinhoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProdutoCarrinhoQuery(get_called_class());
    }
}
