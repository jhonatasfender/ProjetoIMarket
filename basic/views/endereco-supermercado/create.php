<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EnderecoSupermercado */

$this->title = Yii::t('app', 'Create Endereco Supermercado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Endereco Supermercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="endereco-supermercado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
