<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoCarrinho */

$this->title = Yii::t('app', 'Update Produto Carrinho: ' . $model->carrinho_codCarrinho, [
    'nameAttribute' => '' . $model->carrinho_codCarrinho,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produto Carrinhos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->carrinho_codCarrinho, 'url' => ['view', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'produto_codProduto' => $model->produto_codProduto]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="produto-carrinho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
