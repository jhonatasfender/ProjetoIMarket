<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TelefoneSupermercado */

$this->title = 'Update Telefone Supermercado: ' . $model->codTelefone;
$this->params['breadcrumbs'][] = ['label' => 'Telefone Supermercados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codTelefone, 'url' => ['view', 'id' => $model->codTelefone]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telefone-supermercado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
