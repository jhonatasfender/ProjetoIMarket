<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pagamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numeroCartao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeCartao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vencimentoCartao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codSeguranca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente_codCliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
