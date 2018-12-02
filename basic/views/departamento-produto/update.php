<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DepartamentoProduto */

$this->title = 'Update Departamento Produto: ' . $model->codDepartamentoProduto;
$this->params['breadcrumbs'][] = ['label' => 'Departamento Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codDepartamentoProduto, 'url' => ['view', 'id' => $model->codDepartamentoProduto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departamento-produto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
