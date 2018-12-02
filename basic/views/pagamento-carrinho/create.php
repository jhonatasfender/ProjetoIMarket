<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PagamentoCarrinho */

$this->title = Yii::t('app', 'Create Pagamento Carrinho');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pagamento Carrinhos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagamento-carrinho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
