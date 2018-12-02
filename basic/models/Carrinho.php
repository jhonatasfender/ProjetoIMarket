<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrinho".
 *
 * @property int $codCarrinho
 * @property string $dataFinalizacao
 * @property int $cliente_codCliente
 *
 * @property Cliente $clienteCodCliente
 * @property Entrega[] $entregas
 * @property Pagamentocarrinho[] $pagamentocarrinhos
 * @property Pagamento[] $pagamentoCodPagamentos
 * @property ProdutoCarrinho[] $produtoCarrinhos
 * @property Produto[] $produtoCodProdutos
 */
class Carrinho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrinho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataFinalizacao'], 'safe'],
            [['cliente_codCliente'], 'required'],
            [['cliente_codCliente'], 'integer'],
            [['cliente_codCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_codCliente' => 'codCliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codCarrinho' => 'Cod Carrinho',
            'dataFinalizacao' => 'Data Finalizacao',
            'cliente_codCliente' => 'Cliente Cod Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteCodCliente()
    {
        return $this->hasOne(Cliente::className(), ['codCliente' => 'cliente_codCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntregas()
    {
        return $this->hasMany(Entrega::className(), ['carrinho_codCarrinho' => 'codCarrinho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagamentocarrinhos()
    {
        return $this->hasMany(Pagamentocarrinho::className(), ['carrinho_codCarrinho' => 'codCarrinho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagamentoCodPagamentos()
    {
        return $this->hasMany(Pagamento::className(), ['codPagamento' => 'pagamento_codPagamento'])->viaTable('pagamentocarrinho', ['carrinho_codCarrinho' => 'codCarrinho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoCarrinhos()
    {
        return $this->hasMany(ProdutoCarrinho::className(), ['carrinho_codCarrinho' => 'codCarrinho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutoCodProdutos()
    {
        return $this->hasMany(Produto::className(), ['codProduto' => 'produto_codProduto'])->viaTable('produtoCarrinho', ['carrinho_codCarrinho' => 'codCarrinho']);
    }

    /**
     * {@inheritdoc}
     * @return CarrinhoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CarrinhoQuery(get_called_class());
    }
}
