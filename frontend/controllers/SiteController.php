<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends AppController
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

   

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionDummy()
    {
        
            return $this->render('dummy');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionContanct()
    {
       
        return $this->render('about');
    }
}
