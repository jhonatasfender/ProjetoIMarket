<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Entrega */

$this->title = Yii::t('app', 'Update Entrega: ' . $model->codEntrega, [
    'nameAttribute' => '' . $model->codEntrega,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entregas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codEntrega, 'url' => ['view', 'id' => $model->codEntrega]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="entrega-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
