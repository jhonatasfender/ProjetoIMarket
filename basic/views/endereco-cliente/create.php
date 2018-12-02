<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EnderecoCliente */

$this->title = Yii::t('app', 'Create Endereco Cliente');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Endereco Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="endereco-cliente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
