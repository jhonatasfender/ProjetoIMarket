<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EnderecoClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Endereco Clientes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="endereco-cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Endereco Cliente'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codEndereco',
            'CEP',
            'estado',
            'cidade',
            'logradouro',
            //'numero',
            //'complemento',
            //'cliente_codCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
