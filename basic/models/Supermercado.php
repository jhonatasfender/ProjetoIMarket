<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supermercado".
 *
 * @property int $codSupermercado
 * @property string $nomeFantasia
 * @property string $emailSupermercado
 * @property string $razaoSocial
 * @property int $enderecoSupermercado_codEndereco
 * @property string $cnpj
 * @property string $inscricao
 * @property string $senhaSupermercado
 * @property int $perfil
 *
 * @property Estoquesupermercado[] $estoquesupermercados
 * @property EnderecoSupermercado $enderecoSupermercadoCodEndereco
 * @property TelefoneSupermercado[] $telefoneSupermercados
 */
class Supermercado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supermercado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeFantasia', 'emailSupermercado', 'razaoSocial', 'enderecoSupermercado_codEndereco', 'cnpj', 'inscricao', 'senhaSupermercado', 'perfil'], 'required'],
            [['enderecoSupermercado_codEndereco', 'perfil'], 'integer'],
            [['nomeFantasia', 'emailSupermercado', 'razaoSocial', 'inscricao', 'senhaSupermercado'], 'string', 'max' => 45],
            [['cnpj'], 'string', 'max' => 20],
            [['enderecoSupermercado_codEndereco'], 'exist', 'skipOnError' => true, 'targetClass' => EnderecoSupermercado::className(), 'targetAttribute' => ['enderecoSupermercado_codEndereco' => 'codEndereco']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codSupermercado' => Yii::t('app', 'Cod Supermercado'),
            'nomeFantasia' => Yii::t('app', 'Nome Fantasia'),
            'emailSupermercado' => Yii::t('app', 'Email Supermercado'),
            'razaoSocial' => Yii::t('app', 'Razao Social'),
            'enderecoSupermercado_codEndereco' => Yii::t('app', 'Endereco Supermercado Cod Endereco'),
            'cnpj' => Yii::t('app', 'Cnpj'),
            'inscricao' => Yii::t('app', 'Inscricao'),
            'senhaSupermercado' => Yii::t('app', 'Senha Supermercado'),
            'perfil' => Yii::t('app', 'Perfil'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstoquesupermercados()
    {
        return $this->hasMany(Estoquesupermercado::className(), ['codSupermercado' => 'codSupermercado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnderecoSupermercadoCodEndereco()
    {
        return $this->hasOne(EnderecoSupermercado::className(), ['codEndereco' => 'enderecoSupermercado_codEndereco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefoneSupermercados()
    {
        return $this->hasMany(TelefoneSupermercado::className(), ['supermercado_codSupermercado' => 'codSupermercado']);
    }

    /**
     * {@inheritdoc}
     * @return SupermercadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SupermercadoQuery(get_called_class());
    }
}
