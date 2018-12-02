<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codProduto') ?>

    <?= $form->field($model, 'nomeProduto') ?>

    <?= $form->field($model, 'codBarra') ?>

    <?= $form->field($model, 'precoVenda') ?>

    <?= $form->field($model, 'departamentoProduto_codDepartamentoProduto') ?>

    <?php // echo $form->field($model, 'quantidade') ?>

    <?php // echo $form->field($model, 'unidadeMedida_codUnidadeMedida') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
