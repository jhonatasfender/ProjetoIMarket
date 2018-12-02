<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeMedida */

$this->title = Yii::t('app', 'Update Unidade Medida: ' . $model->codUnidadeMedida, [
    'nameAttribute' => '' . $model->codUnidadeMedida,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unidade Medidas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codUnidadeMedida, 'url' => ['view', 'id' => $model->codUnidadeMedida]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="unidade-medida-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
