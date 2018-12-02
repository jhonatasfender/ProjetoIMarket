<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carrinho;

/**
 * CarrinhoSearch represents the model behind the search form of `app\models\Carrinho`.
 */
class CarrinhoSearch extends Carrinho
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codCarrinho', 'cliente_codCliente'], 'integer'],
            [['dataFinalizacao'], 'safe'],
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
        $query = Carrinho::find();

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
            'codCarrinho' => $this->codCarrinho,
            'dataFinalizacao' => $this->dataFinalizacao,
            'cliente_codCliente' => $this->cliente_codCliente,
        ]);

        return $dataProvider;
    }
}
