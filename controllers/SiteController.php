<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
    public function actionIndex()
    {
        return $this->render('index');
    }

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
	 /**
     * Displays about page.
     *
     * @return string
     */
	 public function actionMyjscss()
    {
        return $this->render('myjscss');
    }
	 /**
     * Displays about page.
     *
     * @return string
     */
    public function actionFirstpage($a=5)
    {
        return $this->render('mypostget',['par_a'=>$a]);
    }
	public function actionMyajax()
    {
        return $this->render('myajaxpage');
    }
	
		public function actionMyajaxrezult($a=0,$b=0)
    {
	   
        if(\Yii::$app->request->isAjax){
		
			 
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                $data = Yii::$app->request->post();
                return $this->renderAjax('_myajaxrezultpage', [
                    'rez' => json_encode(\Yii::$app->request->getRawBody()) ,
					'rezsumma'=>$data['a']+$data['b']]
                );
				
       
       }
	}
	   	 public function actionTest()
    {
        return $this->render('test');
    }
	   	 public function actionGipoteka()
    {
        return $this->render('gipoteka');
    }
		public function actionSipoteka()
    {
        return $this->render('sipoteka');
    }
	public function actionVipoteka()
    {
        return $this->render('vipoteka');
    }
	public function actionItipoteka()
    {
        return $this->render('itipoteka');
    }

	   
}
