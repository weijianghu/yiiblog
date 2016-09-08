<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8 0008
 * Time: 下午 4:28
 */

namespace frontend\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;
class CenterController extends Controller
{
    public $layout = 'center';
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
    public function actionIndex(){
        return $this->render('index');
    }
}