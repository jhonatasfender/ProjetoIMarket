<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TelefoneCliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefone-cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <?= $form->field($model, 'cliente_codCliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
