<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PagamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codPagamento') ?>

    <?= $form->field($model, 'numeroCartao') ?>

    <?= $form->field($model, 'nomeCartao') ?>

    <?= $form->field($model, 'vencimentoCartao') ?>

    <?= $form->field($model, 'codSeguranca') ?>

    <?php // echo $form->field($model, 'cliente_codCliente') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
