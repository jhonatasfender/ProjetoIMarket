<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnderecoSupermercadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="endereco-supermercado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codEndereco') ?>

    <?= $form->field($model, 'CEP') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'cidade') ?>

    <?= $form->field($model, 'logradouro') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'complemento') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
