<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8 0008
 * Time: 下午 1:41
 */

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use yii\web\Controller;
use yii\filters\AccessControl;
class AdminController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login'],
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
        ];
    }
    /**
     * 用户登录
     */
    public function actionLogin(){
        $loginForm = new LoginForm();
        if($loginForm->load(Yii::$app->request->post())&&$loginForm->login()){
            return $this->goBack();
        }else{
            return $this->render('login',['model' => $loginForm]);
        }
    }
}