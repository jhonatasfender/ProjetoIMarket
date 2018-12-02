<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoEstoque */

$this->title = Yii::t('app', 'Update Produto Estoque: ' . $model->codProdutoEstoque, [
    'nameAttribute' => '' . $model->codProdutoEstoque,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produto Estoques'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codProdutoEstoque, 'url' => ['view', 'id' => $model->codProdutoEstoque]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="produto-estoque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
