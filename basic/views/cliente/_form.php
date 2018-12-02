<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeCliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataNascimento')->textInput() ?>

    <?= $form->field($model, 'emailCliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senhaCliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perfil')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
