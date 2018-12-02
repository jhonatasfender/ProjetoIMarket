<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $codProduto
 * @property string $nomeProduto
 * @property string $codBarra
 * @property string $precoVenda
 * @property int $departamentoProduto_codDepartamentoProduto
 * @property int $quantidade
 * @property int $unidadeMedida_codUnidadeMedida
 *
 * @property DepartamentoProduto $departamentoProdutoCodDepartamentoProduto
 * @property UnidadeMedida $unidadeMedidaCodUnidadeMedida
 * @property ProdutoCarrinho[] $produtoCarrinhos
 * @property Carrinho[] $carrinhoCodCarrinhos
 * @property ProdutoEstoque[] $produtoEstoques
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeProduto', 'codBarra', 'precoVenda', 'departamentoProduto_codDepartamentoProduto', 'quantidade', 'unidadeMedida_codUnidadeMedida'], 'required'],
            [['departamentoProduto_codDepartamentoProduto', 'quantidade', 'unidadeMedida_codUnidadeMedida'], 'integer'],
            [['nomeProduto', 'codBarra', 'precoVenda'], 'string', 'max' => 45],
            [['departamentoProduto_codDepartamentoProduto'], 'exist', 'skipOnError' => true, 'targetClass' => DepartamentoProduto::className(), 'targetAttribute' => ['departamentoProduto_codDepartamentoProduto' => 'codDepartamentoProduto']],
            [['unidadeMedida_codUnidadeMedida'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadeMedida::className(), 'targetAttribute' => ['unidadeMedida_codUnidadeMedida' => 'codUnidadeMedida']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codProduto' => Yii::t('app', 'Cod Produto'),
            'nomeProduto' => Yii::t('app', 'Nome Produto'),
            'codBarra' => Yii::t('app', 'Cod Barra'),
            'precoVenda' => Yii::t('app', 'Preco Venda'),
            'departamentoProduto_codDepartamentoProduto' => Yii::t('app', 'Departamento Produto Cod Departamento Produto'),
            'quantidade' => Yii::t('app', 'Quantidade'),
            'unidadeMedida_codUnidadeMedida' => Yii::t('app', 'Unidade Medida Cod Unidade Medida'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentoProdutoCodDepartamentoProduto()
    {
        return $this->hasOne(DepartamentoProduto::className(), ['codDepartamentoProduto' => 'departamentoProduto_codDepartamentoProduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadeMedidaCodUnidadeMedida()
    {
        return $this->hasOne(UnidadeMedida::className(), ['codUnidadeMedida' => 'unidadeMedida_codUnidadeMedida']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoCarrinhos()
    {
        return $this->hasMany(ProdutoCarrinho::className(), ['produto_codProduto' => 'codProduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhoCodCarrinhos()
    {
        return $this->hasMany(Carrinho::className(), ['codCarrinho' => 'carrinho_codCarrinho'])->viaTable('produtoCarrinho', ['produto_codProduto' => 'codProduto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoEstoques()
    {
        return $this->hasMany(ProdutoEstoque::className(), ['produto_codProduto' => 'codProduto']);
    }

    /**
     * {@inheritdoc}
     * @return ProdutoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProdutoQuery(get_called_class());
    }
}
