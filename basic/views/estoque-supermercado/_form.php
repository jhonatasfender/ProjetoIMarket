<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EstoqueSupermercado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estoque-supermercado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codSupermercado')->textInput() ?>

    <?= $form->field($model, 'codProdutoEstoque')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
