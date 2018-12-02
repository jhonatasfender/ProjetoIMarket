<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TelefoneSupermercado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefone-supermercado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <?= $form->field($model, 'supermercado_codSupermercado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
