<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EstoqueSupermercado */

$this->title = $model->codSupermercado;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Estoque Supermercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estoque-supermercado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'codSupermercado' => $model->codSupermercado, 'codProdutoEstoque' => $model->codProdutoEstoque], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'codSupermercado' => $model->codSupermercado, 'codProdutoEstoque' => $model->codProdutoEstoque], [
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
            'codSupermercado',
            'codProdutoEstoque',
        ],
    ]) ?>

</div>
