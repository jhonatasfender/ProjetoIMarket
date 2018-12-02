<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enderecoSupermercado".
 *
 * @property int $codEndereco
 * @property string $CEP
 * @property string $estado
 * @property string $cidade
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 *
 * @property Supermercado[] $supermercados
 */
class EnderecoSupermercado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enderecoSupermercado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CEP', 'estado', 'cidade', 'logradouro', 'numero'], 'required'],
            [['CEP', 'estado', 'cidade', 'logradouro', 'numero', 'complemento'], 'string', 'max' => 45],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupermercados()
    {
        return $this->hasMany(Supermercado::className(), ['enderecoSupermercado_codEndereco' => 'codEndereco']);
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
