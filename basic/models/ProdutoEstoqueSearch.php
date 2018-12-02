<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProdutoEstoque;

/**
 * ProdutoEstoqueSearch represents the model behind the search form of `app\models\ProdutoEstoque`.
 */
class ProdutoEstoqueSearch extends ProdutoEstoque
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codProdutoEstoque', 'codProduto', 'quantidade', 'produto_codProduto'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProdutoEstoque::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'codProdutoEstoque' => $this->codProdutoEstoque,
            'codProduto' => $this->codProduto,
            'quantidade' => $this->quantidade,
            'produto_codProduto' => $this->produto_codProduto,
        ]);

        return $dataProvider;
    }
}
