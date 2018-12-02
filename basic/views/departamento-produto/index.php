<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DepartamentoProdutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departamento Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-produto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Departamento Produto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codDepartamentoProduto',
            'nomeDepartamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
