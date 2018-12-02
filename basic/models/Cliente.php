<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $codCliente
 * @property string $nomeCliente
 * @property string $CPF
 * @property string $dataNascimento
 * @property string $emailCliente
 * @property string $senhaCliente
 * @property int $perfil
 *
 * @property Carrinho[] $carrinhos
 * @property EnderecoCliente[] $enderecoClientes
 * @property Pagamento[] $pagamentos
 * @property TelefoneCliente[] $telefoneClientes
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeCliente', 'CPF', 'dataNascimento', 'emailCliente', 'senhaCliente', 'perfil'], 'required'],
            [['dataNascimento'], 'safe'],
            [['perfil'], 'integer'],
            [['nomeCliente', 'emailCliente', 'senhaCliente'], 'string', 'max' => 45],
            [['CPF'], 'string', 'max' => 20],
            [['CPF'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codCliente' => 'Cod Cliente',
            'nomeCliente' => 'Nome Cliente',
            'CPF' => 'Cpf',
            'dataNascimento' => 'Data Nascimento',
            'emailCliente' => 'Email Cliente',
            'senhaCliente' => 'Senha Cliente',
            'perfil' => 'Perfil',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhos()
    {
        return $this->hasMany(Carrinho::className(), ['cliente_codCliente' => 'codCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnderecoClientes()
    {
        return $this->hasMany(EnderecoCliente::className(), ['cliente_codCliente' => 'codCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagamentos()
    {
        return $this->hasMany(Pagamento::className(), ['cliente_codCliente' => 'codCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefoneClientes()
    {
        return $this->hasMany(TelefoneCliente::className(), ['cliente_codCliente' => 'codCliente']);
    }

    /**
     * {@inheritdoc}
     * @return ClienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClienteQuery(get_called_class());
    }
}
