<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supermercado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supermercado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeFantasia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailSupermercado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razaoSocial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enderecoSupermercado_codEndereco')->textInput() ?>

    <?= $form->field($model, 'cnpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inscricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senhaSupermercado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perfil')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
