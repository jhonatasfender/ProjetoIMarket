<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carrinho */

$this->title = 'Update Carrinho: ' . $model->codCarrinho;
$this->params['breadcrumbs'][] = ['label' => 'Carrinhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codCarrinho, 'url' => ['view', 'id' => $model->codCarrinho]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carrinho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
