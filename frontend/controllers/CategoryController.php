<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/9 0009
 * Time: 上午 10:00
 */

namespace frontend\controllers;

use frontend\components\MenuHelper;
use frontend\models\Category;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\AccessControl;
class CategoryController extends Controller
{
    public $layout = 'center';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex(){
        //获取分类列表
        $model = Category::find()->asArray()->all();
        $a = ArrayHelper::index($model,'id');

        $b = MenuHelper::getChilds($a,1);
        print_r($b);
    }
}