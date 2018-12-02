<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutoEstoque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-estoque-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codProdutoEstoque')->textInput() ?>

    <?= $form->field($model, 'codProduto')->textInput() ?>

    <?= $form->field($model, 'quantidade')->textInput() ?>

    <?= $form->field($model, 'produto_codProduto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
