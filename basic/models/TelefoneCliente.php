<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefoneCliente".
 *
 * @property int $codTelefone
 * @property int $telefone
 * @property int $cliente_codCliente
 *
 * @property Cliente $clienteCodCliente
 */
class TelefoneCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telefoneCliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['telefone', 'cliente_codCliente'], 'required'],
            [['telefone', 'cliente_codCliente'], 'integer'],
            [['cliente_codCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente_codCliente' => 'codCliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codTelefone' => Yii::t('app', 'Cod Telefone'),
            'telefone' => Yii::t('app', 'Telefone'),
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
     * {@inheritdoc}
     * @return TelefoneClienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TelefoneClienteQuery(get_called_class());
    }
}
