<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoEstoqueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-estoque-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codProdutoEstoque') ?>

    <?= $form->field($model, 'codProduto') ?>

    <?= $form->field($model, 'quantidade') ?>

    <?= $form->field($model, 'produto_codProduto') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
