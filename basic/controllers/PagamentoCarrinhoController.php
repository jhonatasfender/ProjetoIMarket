<?php

namespace app\controllers;

use Yii;
use app\models\PagamentoCarrinho;
use app\models\PagamentoCarrinhoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PagamentoCarrinhoController implements the CRUD actions for PagamentoCarrinho model.
 */
class PagamentoCarrinhoController extends Controller
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
     * Lists all PagamentoCarrinho models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PagamentoCarrinhoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PagamentoCarrinho model.
     * @param integer $carrinho_codCarrinho
     * @param integer $pagamento_codPagamento
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($carrinho_codCarrinho, $pagamento_codPagamento)
    {
        return $this->render('view', [
            'model' => $this->findModel($carrinho_codCarrinho, $pagamento_codPagamento),
        ]);
    }

    /**
     * Creates a new PagamentoCarrinho model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PagamentoCarrinho();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'pagamento_codPagamento' => $model->pagamento_codPagamento]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PagamentoCarrinho model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $carrinho_codCarrinho
     * @param integer $pagamento_codPagamento
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($carrinho_codCarrinho, $pagamento_codPagamento)
    {
        $model = $this->findModel($carrinho_codCarrinho, $pagamento_codPagamento);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'carrinho_codCarrinho' => $model->carrinho_codCarrinho, 'pagamento_codPagamento' => $model->pagamento_codPagamento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PagamentoCarrinho model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $carrinho_codCarrinho
     * @param integer $pagamento_codPagamento
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($carrinho_codCarrinho, $pagamento_codPagamento)
    {
        $this->findModel($carrinho_codCarrinho, $pagamento_codPagamento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PagamentoCarrinho model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $carrinho_codCarrinho
     * @param integer $pagamento_codPagamento
     * @return PagamentoCarrinho the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($carrinho_codCarrinho, $pagamento_codPagamento)
    {
        if (($model = PagamentoCarrinho::findOne(['carrinho_codCarrinho' => $carrinho_codCarrinho, 'pagamento_codPagamento' => $pagamento_codPagamento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
