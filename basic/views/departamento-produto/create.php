<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DepartamentoProduto */

$this->title = 'Create Departamento Produto';
$this->params['breadcrumbs'][] = ['label' => 'Departamento Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-produto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
