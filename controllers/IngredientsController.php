<?php

namespace app\controllers;

use app\models\Ingredients;
use app\models\IngredientsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IngredientsController implements the CRUD actions for Ingredients model.
 */
class IngredientsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Ingredients models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IngredientsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ingredients model.
     * @param int $id_ingr Id Ingr
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ingr)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ingr),
        ]);
    }

    /**
     * Creates a new Ingredients model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ingredients();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_ingr' => $model->id_ingr]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ingredients model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ingr Id Ingr
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ingr)
    {
        $model = $this->findModel($id_ingr);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ingr' => $model->id_ingr]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ingredients model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ingr Id Ingr
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ingr)
    {
        $this->findModel($id_ingr)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ingredients model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ingr Id Ingr
     * @return Ingredients the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ingr)
    {
        if (($model = Ingredients::findOne(['id_ingr' => $id_ingr])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
