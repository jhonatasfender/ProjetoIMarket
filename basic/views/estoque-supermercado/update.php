<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstoqueSupermercado */

$this->title = Yii::t('app', 'Update Estoque Supermercado: ' . $model->codSupermercado, [
    'nameAttribute' => '' . $model->codSupermercado,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Estoque Supermercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codSupermercado, 'url' => ['view', 'codSupermercado' => $model->codSupermercado, 'codProdutoEstoque' => $model->codProdutoEstoque]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="estoque-supermercado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
