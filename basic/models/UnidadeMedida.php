<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidadeMedida".
 *
 * @property int $codUnidadeMedida
 * @property string $nomeUnidadeMedida
 *
 * @property Produto[] $produtos
 */
class UnidadeMedida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidadeMedida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeUnidadeMedida'], 'required'],
            [['nomeUnidadeMedida'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codUnidadeMedida' => Yii::t('app', 'Cod Unidade Medida'),
            'nomeUnidadeMedida' => Yii::t('app', 'Nome Unidade Medida'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['unidadeMedida_codUnidadeMedida' => 'codUnidadeMedida']);
    }

    /**
     * {@inheritdoc}
     * @return UnidadeMedidaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UnidadeMedidaQuery(get_called_class());
    }
}
