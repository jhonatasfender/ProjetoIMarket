<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enderecoCliente".
 *
 * @property int $codEndereco
 * @property string $CEP
 * @property string $estado
 * @property string $cidade
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property int $cliente_codCliente
 *
 * @property Cliente $clienteCodCliente
 */
class EnderecoCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enderecoCliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CEP', 'estado', 'cidade', 'logradouro', 'numero', 'cliente_codCliente'], 'required'],
            [['cliente_codCliente'], 'integer'],
            [['CEP', 'estado', 'cidade', 'logradouro', 'numero', 'complemento'], 'string', 'max' => 45],
            [['cliente_codCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_codCliente' => 'codCliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codEndereco' => 'Cod Endereco',
            'CEP' => 'Cep',
            'estado' => 'Estado',
            'cidade' => 'Cidade',
            'logradouro' => 'Logradouro',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
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
     * {@inheritdoc}
     * @return DepartamentoProdutoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DepartamentoProdutoQuery(get_called_class());
    }
}
