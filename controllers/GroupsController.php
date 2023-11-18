<?php

namespace app\controllers;

use app\models\groups;
use app\models\groupsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GroupsController implements the CRUD actions for groups model.
 */
class GroupsController extends Controller
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
     * Lists all groups models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new groupsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single groups model.
     * @param int $id_groups Id Groups
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_groups)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_groups),
        ]);
    }

    /**
     * Creates a new groups model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new groups();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_groups' => $model->id_groups]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing groups model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_groups Id Groups
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_groups)
    {
        $model = $this->findModel($id_groups);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_groups' => $model->id_groups]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing groups model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_groups Id Groups
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_groups)
    {
        $this->findModel($id_groups)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the groups model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_groups Id Groups
     * @return groups the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_groups)
    {
        if (($model = groups::findOne(['id_groups' => $id_groups])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
