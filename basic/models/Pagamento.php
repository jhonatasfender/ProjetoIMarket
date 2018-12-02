<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagamento".
 *
 * @property int $codPagamento
 * @property string $numeroCartao
 * @property string $nomeCartao
 * @property string $vencimentoCartao
 * @property string $codSeguranca
 * @property int $cliente_codCliente
 *
 * @property Cliente $clienteCodCliente
 * @property Pagamentocarrinho[] $pagamentocarrinhos
 * @property Carrinho[] $carrinhoCodCarrinhos
 */
class Pagamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numeroCartao', 'nomeCartao', 'vencimentoCartao', 'codSeguranca', 'cliente_codCliente'], 'required'],
            [['cliente_codCliente'], 'integer'],
            [['numeroCartao'], 'string', 'max' => 16],
            [['nomeCartao'], 'string', 'max' => 45],
            [['vencimentoCartao', 'codSeguranca'], 'string', 'max' => 4],
            [['cliente_codCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_codCliente' => 'codCliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codPagamento' => Yii::t('app', 'Cod Pagamento'),
            'numeroCartao' => Yii::t('app', 'Numero Cartao'),
            'nomeCartao' => Yii::t('app', 'Nome Cartao'),
            'vencimentoCartao' => Yii::t('app', 'Vencimento Cartao'),
            'codSeguranca' => Yii::t('app', 'Cod Seguranca'),
            'cliente_codCliente' => Yii::t('app', 'Cliente Cod Cliente'),
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
    public function getPagamentocarrinhos()
    {
        return $this->hasMany(Pagamentocarrinho::className(), ['pagamento_codPagamento' => 'codPagamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhoCodCarrinhos()
    {
        return $this->hasMany(Carrinho::className(), ['codCarrinho' => 'carrinho_codCarrinho'])->viaTable('pagamentocarrinho', ['pagamento_codPagamento' => 'codPagamento']);
    }

    /**
     * {@inheritdoc}
     * @return PagamentoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PagamentoQuery(get_called_class());
    }
}
