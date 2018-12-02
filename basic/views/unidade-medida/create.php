<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UnidadeMedida */

$this->title = Yii::t('app', 'Create Unidade Medida');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unidade Medidas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidade-medida-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
