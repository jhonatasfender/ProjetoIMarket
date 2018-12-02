<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeProduto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codBarra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precoVenda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departamentoProduto_codDepartamentoProduto')->textInput() ?>

    <?= $form->field($model, 'quantidade')->textInput() ?>

    <?= $form->field($model, 'unidadeMedida_codUnidadeMedida')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
