<?php

namespace app\controllers;

use app\models\Dishes;
use app\models\DishesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DishesController implements the CRUD actions for Dishes model.
 */
class DishesController extends Controller
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
     * Lists all Dishes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DishesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dishes model.
     * @param int $id_dishes Id Dishes
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_dishes)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_dishes),
        ]);
    }

    /**
     * Creates a new Dishes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dishes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_dishes' => $model->id_dishes]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dishes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_dishes Id Dishes
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_dishes)
    {
        $model = $this->findModel($id_dishes);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dishes' => $model->id_dishes]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dishes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_dishes Id Dishes
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_dishes)
    {
        $this->findModel($id_dishes)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dishes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_dishes Id Dishes
     * @return Dishes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_dishes)
    {
        if (($model = Dishes::findOne(['id_dishes' => $id_dishes])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
