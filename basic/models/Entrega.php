<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entrega".
 *
 * @property int $codEntrega
 * @property int $carrinho_codCarrinho
 * @property string $dataEntrega
 * @property int $codEndereco
 *
 * @property Carrinho $carrinhoCodCarrinho
 */
class Entrega extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrega';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['carrinho_codCarrinho', 'dataEntrega', 'codEndereco'], 'required'],
            [['carrinho_codCarrinho', 'codEndereco'], 'integer'],
            [['dataEntrega'], 'safe'],
            [['carrinho_codCarrinho'], 'exist', 'skipOnError' => true, 'targetClass' => Carrinho::className(), 'targetAttribute' => ['carrinho_codCarrinho' => 'codCarrinho']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codEntrega' => Yii::t('app', 'Cod Entrega'),
            'carrinho_codCarrinho' => Yii::t('app', 'Carrinho Cod Carrinho'),
            'dataEntrega' => Yii::t('app', 'Data Entrega'),
            'codEndereco' => Yii::t('app', 'Cod Endereco'),
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
     * {@inheritdoc}
     * @return EntregaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EntregaQuery(get_called_class());
    }
}
