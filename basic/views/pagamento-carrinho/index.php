<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PagamentoCarrinhoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pagamento Carrinhos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagamento-carrinho-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Pagamento Carrinho'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'carrinho_codCarrinho',
            'pagamento_codPagamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
