<?php

namespace app\controllers;

use app\models\Sostav;
use app\models\SostavSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SostavController implements the CRUD actions for Sostav model.
 */
class SostavController extends Controller
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
     * Lists all Sostav models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SostavSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sostav model.
     * @param int $id_sostav Id Sostav
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_sostav)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_sostav),
        ]);
    }

    /**
     * Creates a new Sostav model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Sostav();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_sostav' => $model->id_sostav]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sostav model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_sostav Id Sostav
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_sostav)
    {
        $model = $this->findModel($id_sostav);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_sostav' => $model->id_sostav]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sostav model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_sostav Id Sostav
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_sostav)
    {
        $this->findModel($id_sostav)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sostav model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_sostav Id Sostav
     * @return Sostav the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_sostav)
    {
        if (($model = Sostav::findOne(['id_sostav' => $id_sostav])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
