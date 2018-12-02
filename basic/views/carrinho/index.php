<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarrinhoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carrinhos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carrinho-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carrinho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codCarrinho',
            'dataFinalizacao',
            'cliente_codCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
