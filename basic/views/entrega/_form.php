<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Entrega */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entrega-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'carrinho_codCarrinho')->textInput() ?>

    <?= $form->field($model, 'dataEntrega')->textInput() ?>

    <?= $form->field($model, 'codEndereco')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
