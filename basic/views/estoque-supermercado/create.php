<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EstoqueSupermercado */

$this->title = Yii::t('app', 'Create Estoque Supermercado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Estoque Supermercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estoque-supermercado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
