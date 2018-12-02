<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supermercado */

$this->title = $model->codSupermercado;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Supermercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supermercado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->codSupermercado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->codSupermercado], [
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
            'codSupermercado',
            'nomeFantasia',
            'emailSupermercado:email',
            'razaoSocial',
            'enderecoSupermercado_codEndereco',
            'cnpj',
            'inscricao',
            'senhaSupermercado',
            'perfil',
        ],
    ]) ?>

</div>
