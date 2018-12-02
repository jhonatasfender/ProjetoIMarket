<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Entrega */

$this->title = $model->codEntrega;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entregas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrega-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->codEntrega], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->codEntrega], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codEntrega',
            'carrinho_codCarrinho',
            'dataEntrega',
            'codEndereco',
        ],
    ]) ?>

</div>
