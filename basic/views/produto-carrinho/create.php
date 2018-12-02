<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProdutoCarrinho */

$this->title = Yii::t('app', 'Create Produto Carrinho');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produto Carrinhos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-carrinho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
