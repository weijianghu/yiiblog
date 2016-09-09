<?php

namespace frontend\models;

use frontend\components\MenuHelper;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $name
 * @property string $ename
 * @property integer $status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'name', 'ename', 'status'], 'required'],
            [['pid', 'status'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['ename'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => Yii::t('frontend/common', 'Pid'),
            'name' => Yii::t('frontend/common', 'Name'),
            'ename' => Yii::t('frontend/common', 'Ename'),
            'status' => Yii::t('frontend/common', 'Status'),
        ];
    }
    public static function getCategory($id=0){
        $data = self::find()->asArray()->all();
        return MenuHelper::getChilds(ArrayHelper::index($data,'id'),$id);
    }
}
