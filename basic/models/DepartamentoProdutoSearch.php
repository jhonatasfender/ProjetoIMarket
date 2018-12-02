<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DepartamentoProduto;

/**
 * DepartamentoProdutoSearch represents the model behind the search form of `app\models\DepartamentoProduto`.
 */
class DepartamentoProdutoSearch extends DepartamentoProduto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codDepartamentoProduto'], 'integer'],
            [['nomeDepartamento'], 'safe'],
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
        $query = DepartamentoProduto::find();

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
            'codDepartamentoProduto' => $this->codDepartamentoProduto,
        ]);

        $query->andFilterWhere(['like', 'nomeDepartamento', $this->nomeDepartamento]);

        return $dataProvider;
    }
}
