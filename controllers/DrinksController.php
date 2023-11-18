<?php

namespace app\controllers;

use app\models\drinks;
use app\models\drinksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DrinksController implements the CRUD actions for drinks model.
 */
class DrinksController extends Controller
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
     * Lists all drinks models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new drinksSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single drinks model.
     * @param int $id_drinks Id Drinks
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_drinks)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_drinks),
        ]);
    }

    /**
     * Creates a new drinks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new drinks();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_drinks' => $model->id_drinks]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing drinks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_drinks Id Drinks
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_drinks)
    {
        $model = $this->findModel($id_drinks);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_drinks' => $model->id_drinks]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing drinks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_drinks Id Drinks
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_drinks)
    {
        $this->findModel($id_drinks)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the drinks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_drinks Id Drinks
     * @return drinks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_drinks)
    {
        if (($model = drinks::findOne(['id_drinks' => $id_drinks])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
