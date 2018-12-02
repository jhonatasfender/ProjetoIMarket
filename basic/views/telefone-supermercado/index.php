<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TelefoneSupermercadoQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Telefone Supermercados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telefone-supermercado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Telefone Supermercado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codTelefone',
            'telefone',
            'supermercado_codSupermercado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
