<?php

namespace app\controllers;

use app\models\Waiters;
use app\models\WaitersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WaitersController implements the CRUD actions for Waiters model.
 */
class WaitersController extends Controller
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
     * Lists all Waiters models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WaitersSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Waiters model.
     * @param int $id_waiters Id Waiters
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_waiters)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_waiters),
        ]);
    }

    /**
     * Creates a new Waiters model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Waiters();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_waiters' => $model->id_waiters]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Waiters model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_waiters Id Waiters
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_waiters)
    {
        $model = $this->findModel($id_waiters);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_waiters' => $model->id_waiters]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Waiters model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_waiters Id Waiters
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_waiters)
    {
        $this->findModel($id_waiters)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Waiters model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_waiters Id Waiters
     * @return Waiters the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_waiters)
    {
        if (($model = Waiters::findOne(['id_waiters' => $id_waiters])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
