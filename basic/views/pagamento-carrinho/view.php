<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PagamentoCarrinho */

$this->title = $model->carrinho_codCarrinho;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pagamento Carrinhos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagamento-carrinho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'pagamento_codPagamento' => $model->pagamento_codPagamento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'pagamento_codPagamento' => $model->pagamento_codPagamento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'carrinho_codCarrinho',
            'pagamento_codPagamento',
        ],
    ]) ?>

</div>
