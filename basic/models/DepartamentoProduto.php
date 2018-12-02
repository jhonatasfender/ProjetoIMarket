<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamentoProduto".
 *
 * @property int $codDepartamentoProduto
 * @property string $nomeDepartamento
 *
 * @property Produto[] $produtos
 */
class DepartamentoProduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamentoProduto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomeDepartamento'], 'required'],
            [['nomeDepartamento'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codDepartamentoProduto' => 'Cod Departamento Produto',
            'nomeDepartamento' => 'Nome Departamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['departamentoProduto_codDepartamentoProduto' => 'codDepartamentoProduto']);
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
