<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Produto;

/**
 * ProdutoSearch represents the model behind the search form of `app\models\Produto`.
 */
class ProdutoSearch extends Produto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codProduto', 'departamentoProduto_codDepartamentoProduto', 'quantidade', 'unidadeMedida_codUnidadeMedida'], 'integer'],
            [['nomeProduto', 'codBarra', 'precoVenda'], 'safe'],
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
        $query = Produto::find();

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
            'codProduto' => $this->codProduto,
            'departamentoProduto_codDepartamentoProduto' => $this->departamentoProduto_codDepartamentoProduto,
            'quantidade' => $this->quantidade,
            'unidadeMedida_codUnidadeMedida' => $this->unidadeMedida_codUnidadeMedida,
        ]);

        $query->andFilterWhere(['like', 'nomeProduto', $this->nomeProduto])
            ->andFilterWhere(['like', 'codBarra', $this->codBarra])
            ->andFilterWhere(['like', 'precoVenda', $this->precoVenda]);

        return $dataProvider;
    }
}
