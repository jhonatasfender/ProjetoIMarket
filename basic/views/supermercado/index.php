<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupermercadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Supermercados');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supermercado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Supermercado'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codSupermercado',
            'nomeFantasia',
            'emailSupermercado:email',
            'razaoSocial',
            'enderecoSupermercado_codEndereco',
            //'cnpj',
            //'inscricao',
            //'senhaSupermercado',
            //'perfil',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
