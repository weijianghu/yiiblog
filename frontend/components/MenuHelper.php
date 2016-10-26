<?php
/**
 * User: 江湖
 * Date: 2016/9/9 0009
 * Time: 上午 10:15
 * 数据树形结构解析
 */

namespace frontend\components;


use yii\base\Component;

class MenuHelper extends Component
{
    public static $id;
    public static $parent = 'pid';
    public static $childs = 'childs';
    /**
     * 获取后代数据
     * @param  array $data 要分析的数据，一维数组，键值为主键id
     * @param int $id 要分析的id
     * @param  string $parent 父辈标志
     * @param  string $childs 子类标志
     * @return array
     */
    public static function getChilds($data,$id=0,$parent='',$childs=''){
        $ret = [];
        $parent = empty($parent)? self::$parent:$parent;
        $childs = empty($childs)? self::$childs:$childs;
        if(!is_array($data)||empty($data)){
            return $ret;
        }
        if($id){
            //分析指定id
            foreach($data as $key => $value){
                //找到后代
                if($value[$parent] == $id){
                    //寻找后代的后代，两种情况：1已经不存在后代，2仍然存在后代
                    $ret[$key] = $data[$key];
                    $childData = self::getChilds($data,$key,$parent,$childs);
                    if(!empty($childData)) $ret[$key][$childs] = $childData;
                }
            }
        }else{
            //全局分析
            foreach($data as $key => $value){
                //过滤掉非顶级数据
                if($value[$parent]){
                    continue;
                }
                //分析顶级数据的后代数据
                $ret[$key] = $value;
                $ret[$key][$childs] = self::getChilds($data,$key,$parent,$childs);
            }
        }
        return $ret;
    }
}