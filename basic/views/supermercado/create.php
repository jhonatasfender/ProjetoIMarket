<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Supermercado */

$this->title = Yii::t('app', 'Create Supermercado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Supermercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supermercado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
