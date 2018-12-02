<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProdutoEstoque */

$this->title = Yii::t('app', 'Create Produto Estoque');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produto Estoques'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-estoque-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
