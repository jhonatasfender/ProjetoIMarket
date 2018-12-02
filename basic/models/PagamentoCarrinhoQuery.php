<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PagamentoCarrinho;

/**
 * PagamentoCarrinhoQuery represents the model behind the search form of `app\models\PagamentoCarrinho`.
 */
class PagamentoCarrinhoQuery extends PagamentoCarrinho
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['carrinho_codCarrinho', 'pagamento_codPagamento'], 'integer'],
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
        $query = PagamentoCarrinho::find();

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
            'carrinho_codCarrinho' => $this->carrinho_codCarrinho,
            'pagamento_codPagamento' => $this->pagamento_codPagamento,
        ]);

        return $dataProvider;
    }
}
