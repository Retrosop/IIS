<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Search;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionIndex($namepub = '', $authorpub = '', $datepub = '')
    {
        

            $data = $namepub;
            $data1 =$authorpub;
            $data2 =$datepub;
            
            $query = Search::find();
            if (!empty($data)) {
                $query->andWhere(['LIKE', 'namepub', '%'.$data.'%', false]);
            }
            if (!empty($data1)) {
                $query->andWhere(['LIKE', 'authorpub', '%'.$data1.'%', false]);
            }
            if (!empty($data2)) {
                $query->andWhere(['LIKE', 'datepub', '%'.$data2.'%', false]);
            }
                        
            $pagination = new Pagination
            ([
                'PageSize' => 7,
                'totalCount'=> $query->count(),
            ]);
            
            $models = $query->offset($pagination->offset)->limit($pagination->limit)->all();

            \Yii::$app->getView()->params['namepub'] = $data;
            \Yii::$app->getView()->params['authorpub'] = $data1;
            \Yii::$app->getView()->params['datepub'] = $data2;
            
            return $this->render('index', 
            [
                'pages' => $pagination,
                'models'=> $models,
            ]);
        
    }
}
