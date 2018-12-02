<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TelefoneSupermercado */

$this->title = $model->codTelefone;
$this->params['breadcrumbs'][] = ['label' => 'Telefone Supermercados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telefone-supermercado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->codTelefone], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->codTelefone], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codTelefone',
            'telefone',
            'supermercado_codSupermercado',
        ],
    ]) ?>

</div>
