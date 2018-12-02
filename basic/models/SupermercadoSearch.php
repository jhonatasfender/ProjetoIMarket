<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supermercado;

/**
 * SupermercadoSearch represents the model behind the search form of `app\models\Supermercado`.
 */
class SupermercadoSearch extends Supermercado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codSupermercado', 'enderecoSupermercado_codEndereco', 'perfil'], 'integer'],
            [['nomeFantasia', 'emailSupermercado', 'razaoSocial', 'cnpj', 'inscricao', 'senhaSupermercado'], 'safe'],
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
        $query = Supermercado::find();

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
            'codSupermercado' => $this->codSupermercado,
            'enderecoSupermercado_codEndereco' => $this->enderecoSupermercado_codEndereco,
            'perfil' => $this->perfil,
        ]);

        $query->andFilterWhere(['like', 'nomeFantasia', $this->nomeFantasia])
            ->andFilterWhere(['like', 'emailSupermercado', $this->emailSupermercado])
            ->andFilterWhere(['like', 'razaoSocial', $this->razaoSocial])
            ->andFilterWhere(['like', 'cnpj', $this->cnpj])
            ->andFilterWhere(['like', 'inscricao', $this->inscricao])
            ->andFilterWhere(['like', 'senhaSupermercado', $this->senhaSupermercado]);

        return $dataProvider;
    }
}
