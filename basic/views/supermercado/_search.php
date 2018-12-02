<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupermercadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supermercado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codSupermercado') ?>

    <?= $form->field($model, 'nomeFantasia') ?>

    <?= $form->field($model, 'emailSupermercado') ?>

    <?= $form->field($model, 'razaoSocial') ?>

    <?= $form->field($model, 'enderecoSupermercado_codEndereco') ?>

    <?php // echo $form->field($model, 'cnpj') ?>

    <?php // echo $form->field($model, 'inscricao') ?>

    <?php // echo $form->field($model, 'senhaSupermercado') ?>

    <?php // echo $form->field($model, 'perfil') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
