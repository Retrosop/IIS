<?php

namespace app\controllers;

use app\models\Search;
use app\models\PubSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PubController implements the CRUD actions for Search model.
 */
class PubController extends Controller
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
     * Lists all Search models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PubSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Search model.
     * @param int $id_pub Id Pub
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pub)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pub),
        ]);
    }

    /**
     * Creates a new Search model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Search();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pub' => $model->id_pub]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Search model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pub Id Pub
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pub)
    {
        $model = $this->findModel($id_pub);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pub' => $model->id_pub]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Search model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pub Id Pub
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pub)
    {
        $this->findModel($id_pub)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Search model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pub Id Pub
     * @return Search the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pub)
    {
        if (($model = Search::findOne(['id_pub' => $id_pub])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
