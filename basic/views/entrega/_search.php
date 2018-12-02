<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntregaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entrega-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codEntrega') ?>

    <?= $form->field($model, 'carrinho_codCarrinho') ?>

    <?= $form->field($model, 'dataEntrega') ?>

    <?= $form->field($model, 'codEndereco') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
