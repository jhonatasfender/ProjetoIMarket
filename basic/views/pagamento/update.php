<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pagamento */

$this->title = Yii::t('app', 'Update Pagamento: ' . $model->codPagamento, [
    'nameAttribute' => '' . $model->codPagamento,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pagamentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codPagamento, 'url' => ['view', 'id' => $model->codPagamento]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pagamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
