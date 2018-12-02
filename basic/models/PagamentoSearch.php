<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pagamento;

/**
 * PagamentoSearch represents the model behind the search form of `app\models\Pagamento`.
 */
class PagamentoSearch extends Pagamento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codPagamento', 'cliente_codCliente'], 'integer'],
            [['numeroCartao', 'nomeCartao', 'vencimentoCartao', 'codSeguranca'], 'safe'],
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
        $query = Pagamento::find();

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
            'codPagamento' => $this->codPagamento,
            'cliente_codCliente' => $this->cliente_codCliente,
        ]);

        $query->andFilterWhere(['like', 'numeroCartao', $this->numeroCartao])
            ->andFilterWhere(['like', 'nomeCartao', $this->nomeCartao])
            ->andFilterWhere(['like', 'vencimentoCartao', $this->vencimentoCartao])
            ->andFilterWhere(['like', 'codSeguranca', $this->codSeguranca]);

        return $dataProvider;
    }
}
