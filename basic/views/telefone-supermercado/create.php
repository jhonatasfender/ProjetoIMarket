<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TelefoneSupermercado */

$this->title = 'Create Telefone Supermercado';
$this->params['breadcrumbs'][] = ['label' => 'Telefone Supermercados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telefone-supermercado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
