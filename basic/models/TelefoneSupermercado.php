<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefoneSupermercado".
 *
 * @property int $codTelefone
 * @property int $telefone
 * @property int $supermercado_codSupermercado
 *
 * @property Supermercado $supermercadoCodSupermercado
 */
class TelefoneSupermercado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telefoneSupermercado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['telefone', 'supermercado_codSupermercado'], 'required'],
            [['telefone', 'supermercado_codSupermercado'], 'integer'],
            [['supermercado_codSupermercado'], 'exist', 'skipOnError' => true, 'targetClass' => Supermercado::className(), 'targetAttribute' => ['supermercado_codSupermercado' => 'codSupermercado']],
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
            'supermercado_codSupermercado' => Yii::t('app', 'Supermercado Cod Supermercado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupermercadoCodSupermercado()
    {
        return $this->hasOne(Supermercado::className(), ['codSupermercado' => 'supermercado_codSupermercado']);
    }

    /**
     * {@inheritdoc}
     * @return TelefoneSupermercadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TelefoneSupermercadoQuery(get_called_class());
    }
}
