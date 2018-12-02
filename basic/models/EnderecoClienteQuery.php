<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EnderecoCliente;

/**
 * EnderecoClienteQuery represents the model behind the search form of `app\models\EnderecoCliente`.
 */
class EnderecoClienteQuery extends EnderecoCliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codEndereco', 'cliente_codCliente'], 'integer'],
            [['CEP', 'estado', 'cidade', 'logradouro', 'numero', 'complemento'], 'safe'],
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
        $query = EnderecoCliente::find();

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
            'codEndereco' => $this->codEndereco,
            'cliente_codCliente' => $this->cliente_codCliente,
        ]);

        $query->andFilterWhere(['like', 'CEP', $this->CEP])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'complemento', $this->complemento]);

        return $dataProvider;
    }
}
