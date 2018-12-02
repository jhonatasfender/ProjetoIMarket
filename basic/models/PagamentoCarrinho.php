<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagamentocarrinho".
 *
 * @property int $carrinho_codCarrinho
 * @property int $pagamento_codPagamento
 *
 * @property Carrinho $carrinhoCodCarrinho
 * @property Pagamento $pagamentoCodPagamento
 */
class PagamentoCarrinho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagamentocarrinho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['carrinho_codCarrinho', 'pagamento_codPagamento'], 'required'],
            [['carrinho_codCarrinho', 'pagamento_codPagamento'], 'integer'],
            [['carrinho_codCarrinho', 'pagamento_codPagamento'], 'unique', 'targetAttribute' => ['carrinho_codCarrinho', 'pagamento_codPagamento']],
            [['carrinho_codCarrinho'], 'exist', 'skipOnError' => true, 'targetClass' => Carrinho::className(), 'targetAttribute' => ['carrinho_codCarrinho' => 'codCarrinho']],
            [['pagamento_codPagamento'], 'exist', 'skipOnError' => true, 'targetClass' => Pagamento::className(), 'targetAttribute' => ['pagamento_codPagamento' => 'codPagamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'carrinho_codCarrinho' => Yii::t('app', 'Carrinho Cod Carrinho'),
            'pagamento_codPagamento' => Yii::t('app', 'Pagamento Cod Pagamento'),
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
    public function getPagamentoCodPagamento()
    {
        return $this->hasOne(Pagamento::className(), ['codPagamento' => 'pagamento_codPagamento']);
    }

    /**
     * {@inheritdoc}
     * @return PagamentocarrinhoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PagamentocarrinhoQuery(get_called_class());
    }
}
