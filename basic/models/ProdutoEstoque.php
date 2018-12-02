<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtoEstoque".
 *
 * @property int $codProdutoEstoque
 * @property int $codProduto
 * @property int $quantidade
 * @property int $produto_codProduto
 *
 * @property Produto $produtoCodProduto
 */
class ProdutoEstoque extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtoEstoque';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codProdutoEstoque', 'codProduto', 'quantidade'], 'required'],
            [['codProdutoEstoque', 'codProduto', 'quantidade', 'produto_codProduto'], 'integer'],
            [['codProdutoEstoque'], 'unique'],
            [['produto_codProduto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['produto_codProduto' => 'codProduto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codProdutoEstoque' => Yii::t('app', 'Cod Produto Estoque'),
            'codProduto' => Yii::t('app', 'Cod Produto'),
            'quantidade' => Yii::t('app', 'Quantidade'),
            'produto_codProduto' => Yii::t('app', 'Produto Cod Produto'),
        ];
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
     * @return ProdutoEstoqueQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProdutoEstoqueQuery(get_called_class());
    }
}
