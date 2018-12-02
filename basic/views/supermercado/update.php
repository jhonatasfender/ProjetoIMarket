<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Supermercado */

$this->title = Yii::t('app', 'Update Supermercado: ' . $model->codSupermercado, [
    'nameAttribute' => '' . $model->codSupermercado,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Supermercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codSupermercado, 'url' => ['view', 'id' => $model->codSupermercado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="supermercado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
