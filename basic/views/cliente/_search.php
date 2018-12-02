<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codCliente') ?>

    <?= $form->field($model, 'nomeCliente') ?>

    <?= $form->field($model, 'CPF') ?>

    <?= $form->field($model, 'dataNascimento') ?>

    <?= $form->field($model, 'emailCliente') ?>

    <?php // echo $form->field($model, 'senhaCliente') ?>

    <?php // echo $form->field($model, 'perfil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
