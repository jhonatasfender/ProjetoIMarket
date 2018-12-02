<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TelefoneCliente */

$this->title = Yii::t('app', 'Update Telefone Cliente: ' . $model->codTelefone, [
    'nameAttribute' => '' . $model->codTelefone,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Telefone Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codTelefone, 'url' => ['view', 'id' => $model->codTelefone]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="telefone-cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
