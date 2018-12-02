<?php

namespace app\controllers;

use Yii;
use app\models\EstoqueSupermercado;
use app\models\EstoqueSupermercadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EstoqueSupermercadoController implements the CRUD actions for EstoqueSupermercado model.
 */
class EstoqueSupermercadoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EstoqueSupermercado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EstoqueSupermercadoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EstoqueSupermercado model.
     * @param integer $codSupermercado
     * @param integer $codProdutoEstoque
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($codSupermercado, $codProdutoEstoque)
    {
        return $this->render('view', [
            'model' => $this->findModel($codSupermercado, $codProdutoEstoque),
        ]);
    }

    /**
     * Creates a new EstoqueSupermercado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EstoqueSupermercado();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codSupermercado' => $model->codSupermercado, 'codProdutoEstoque' => $model->codProdutoEstoque]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EstoqueSupermercado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $codSupermercado
     * @param integer $codProdutoEstoque
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($codSupermercado, $codProdutoEstoque)
    {
        $model = $this->findModel($codSupermercado, $codProdutoEstoque);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codSupermercado' => $model->codSupermercado, 'codProdutoEstoque' => $model->codProdutoEstoque]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EstoqueSupermercado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $codSupermercado
     * @param integer $codProdutoEstoque
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($codSupermercado, $codProdutoEstoque)
    {
        $this->findModel($codSupermercado, $codProdutoEstoque)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EstoqueSupermercado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $codSupermercado
     * @param integer $codProdutoEstoque
     * @return EstoqueSupermercado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codSupermercado, $codProdutoEstoque)
    {
        if (($model = EstoqueSupermercado::findOne(['codSupermercado' => $codSupermercado, 'codProdutoEstoque' => $codProdutoEstoque])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
