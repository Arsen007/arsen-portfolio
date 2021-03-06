<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public $isMobile = false;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    public function actionIndex()
    {
        Yii::$app->view->params['isMobile'] = preg_match("/Mobile|Android|BlackBerry|iPhone|Windows Phone/", $_SERVER['HTTP_USER_AGENT']);
        return $this->render('index');
    }

    public function actionGetWorkDetails()
    {
        $workId = Yii::$app->request->getQueryParam('id');
        $works = [
            [
                'name' => 'World Hostels',
                'id' => 'world_hostels',
                'url' => 'http://www.youth-hostels.co.uk/',
                'screen' => 'world-hostels.jpg',
                'technologies' => 'php,code igniter,jquery,javascript,mysql,soap',
                'description' => 'The site helps to find hostels, hotels, apartments.. in worldwide and book them by any period.
                Site supporting more then 40 localizations on different domains for each country.',
                'role' => 'Improved caching of search results using json file, localStorage, MySql, Redis. Also worked on fixing some dynamic features that using ajax and google map'
            ],
            [
                'name' => 'Back Stock',
                'id' => 'backstock',
                'url' => 'http://thebackstock.com/',
                'screen' => 'backstock.jpg',
                'technologies' => 'yii2 framework,php,javascript,mysql,bootstrap',
                'description' => 'Product delivery management for shops and food deliverymans.',
                'role' => ''

            ],
            [
                'name' => 'Active Location',
                'id' => 'activelocation',
                'url' => 'http://activelocation.com/',
                'screen' => 'activelocation.jpg',
                'technologies' => 'yii2 framework,php,javascript,mysql,bootstrap',
                'description' => 'Active Location™ deploys Bluetooth sensor platform to analyze and correlate location data from consumer activity. The resulting intelligence gives businesses the ability to increase revenue and deliver an unprecedented understanding of consumer behavior, while offering a privacy-friendly way to identify, position, access and analyze mobile audiences.'
            ],
            [
                'name' => 'XCINEX',
                'id' => 'xcinex',
                'url' => 'http://www.xcinex.com/',
                'screen' => 'xcinex.jpg',
                'technologies' => 'yii2 framework,php,javascript,mysql,bootstrap',
                'description' => 'Cinema at home',
                'role' => 'Worked on REST API for mobile app'
            ],
            [
                'name' => 'Three Stay',
                'id' => 'threestay',
                'url' => 'http://www.threestay.com/',
                'screen' => 'threestay.jpg',
                'technologies' => 'magento,php,javascript,mysql',
                'description' => 'Hotels, houses etc bocking for travelers',
                'role' => 'Improved chat between client and renter'

            ],
            [
                'name' => 'Family Change Services',
                'id' => 'familychangeservices',
                'url' => 'http://www.familychangeservices.com/',
                'screen' => 'familychangeservices.jpg',
                'technologies' => 'php,javascript,angular,mysql',
                'description' => 'Different services for family in various professions like jurisprudence, psychology, therapy, nutrition etc. Family members registering as users and providers registering as providers then users finding providers based on their needs.',
                'role' => 'Worked on provider search improvement using MYSQL procedures and improved front end pages using Angular'

            ],
            [
                'name' => 'Trealer',
                'id' => 'trealer',
                'url' => 'https://trealer.com/',
                'screen' => 'trealer.jpg',
                'technologies' => 'laravel,php,javascript,angular,mysql',
                'description' => 'Music application like spotify! Helps to easily find, collect and listen your favorite music. Also the artists will be billed for each play of their composition depending plays count',
                'role' => 'Worked on integrating several 3rd party APIs (soundcloud, spotify, itunes, lastfm) for music search, payment calculations depending of song playbacks. Also worked on front-end pages, popups...'
            ],
            [
                'name' => 'ARTZLINK',
                'id' => 'artzlink',
                'url' => 'http://artzlink.com/',
                'screen' => 'artzlink.jpg',
                'technologies' => 'yii framework,php,javascript,mysql,braintree api',
                'description' => 'Cloud based network providing a virtual classroom for performing arts organizations. Instructors can post messages and files, give assignments, grade assignments, and provide spoken feedback to students. Students can receive posted messages/files, record and post assignments, and keep up with their grades.'
            ],
            [
                'name' => 'ValetTAB',
                'id' => 'valettab',
                'url' => 'http://valettab.com/',
                'screen' => 'valettab.jpg',
                'technologies' => 'yii framework,php,javascript,mysql,braintree api,google map api,bootstrap',
                'description' => 'Admin panel and REST API for mobile application that provide easy way to pay for car parking without cash.'
            ],
            [
                'name' => 'USA Craports',
                'id' => 'usa-carports',
                'url' => 'https://usacarports.com/',
                'screen' => 'usa-carports.jpg',
                'technologies' => 'php,laravel framework,Vue JS,three JS,mysql,paypal,bootstrap,3D MAX',
                'description' => 'App to customize your own carport in 3D builder and order them.',
                'role' => 'Have worked almost on all parts including: 3D builder, customizer, location based checkout, email marketing etc.'
            ]
        ];
        $currWork = [];
        foreach ($works as $work) {
            if ($work['id'] == $workId) {
                $currWork = $work;
                break;
            }
        }
        if (!empty($currWork)) {
            return $this->renderPartial('work-detail', $currWork);
        }
        return $this->renderPartial('work-detail-fail');

    }

    public function actionContact(){
        $contactForm = new ContactForm();
        $contactForm->setAttributes(Yii::$app->request->post());
        return $contactForm->sendMail();
    }

    public function actionCv(){
        header("Content-type:application/pdf");

        // It will be called downloaded.pdf
        header("Content-Disposition:attachment;filename='CV_Arsen_Sargsyan_2018.pdf'");

        // The PDF source is in original.pdf
        readfile(\Yii::getAlias('@webroot').'\files\CV_Arsen_2018.pdf');
//        Yii::$app->response->xSendFile(\Yii::getAlias('@webroot').'\files\CV_Arsen_2018.pdf');
    }

//    public function actionLogin()
//    {
//        if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        } else {
//            return $this->render('login', [
//                'model' => $model,
//            ]);
//        }
//    }
//
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }
}
