<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carrinho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carrinho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dataFinalizacao')->textInput() ?>

    <?= $form->field($model, 'cliente_codCliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
