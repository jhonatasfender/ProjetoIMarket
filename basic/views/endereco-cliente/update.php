<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EnderecoCliente */

$this->title = Yii::t('app', 'Update Endereco Cliente: ' . $model->codEndereco, [
    'nameAttribute' => '' . $model->codEndereco,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Endereco Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codEndereco, 'url' => ['view', 'id' => $model->codEndereco]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="endereco-cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
