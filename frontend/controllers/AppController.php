<?php

/**
 * All frontend controller should extend this controller
 * 
 * @author Abon Duttaroy<abondr.job@gmail.com>
 * 
 */

namespace frontend\controllers;

use Yii;

class AppController extends \yii\web\Controller
{
    public function beforeAction($action) {
        
        return parent::beforeAction($action);
         
    }
}
