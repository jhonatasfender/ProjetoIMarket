<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Entrega */

$this->title = Yii::t('app', 'Create Entrega');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entregas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrega-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
