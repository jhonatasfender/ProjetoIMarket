<?php

namespace app\controllers;

use Yii;
use app\models\ProdutoCarrinho;
use app\models\ProdutoCarrinhoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdutoCarrinhoController implements the CRUD actions for ProdutoCarrinho model.
 */
class ProdutoCarrinhoController extends Controller
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
     * Lists all ProdutoCarrinho models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProdutoCarrinhoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProdutoCarrinho model.
     * @param integer $carrinho_codCarrinho
     * @param integer $produto_codProduto
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($carrinho_codCarrinho, $produto_codProduto)
    {
        return $this->render('view', [
            'model' => $this->findModel($carrinho_codCarrinho, $produto_codProduto),
        ]);
    }

    /**
     * Creates a new ProdutoCarrinho model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProdutoCarrinho();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'produto_codProduto' => $model->produto_codProduto]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProdutoCarrinho model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $carrinho_codCarrinho
     * @param integer $produto_codProduto
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($carrinho_codCarrinho, $produto_codProduto)
    {
        $model = $this->findModel($carrinho_codCarrinho, $produto_codProduto);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'produto_codProduto' => $model->produto_codProduto]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProdutoCarrinho model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $carrinho_codCarrinho
     * @param integer $produto_codProduto
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($carrinho_codCarrinho, $produto_codProduto)
    {
        $this->findModel($carrinho_codCarrinho, $produto_codProduto)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProdutoCarrinho model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $carrinho_codCarrinho
     * @param integer $produto_codProduto
     * @return ProdutoCarrinho the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($carrinho_codCarrinho, $produto_codProduto)
    {
        if (($model = ProdutoCarrinho::findOne(['carrinho_codCarrinho' => $carrinho_codCarrinho, 'produto_codProduto' => $produto_codProduto])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
