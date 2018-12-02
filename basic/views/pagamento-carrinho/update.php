<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PagamentoCarrinho */

$this->title = Yii::t('app', 'Update Pagamento Carrinho: ' . $model->carrinho_codCarrinho, [
    'nameAttribute' => '' . $model->carrinho_codCarrinho,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pagamento Carrinhos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->carrinho_codCarrinho, 'url' => ['view', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'pagamento_codPagamento' => $model->pagamento_codPagamento]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pagamento-carrinho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
