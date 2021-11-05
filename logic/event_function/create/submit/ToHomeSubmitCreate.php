<?php
/**
 * 到家场景
 *
 * @author : zhangyu
 * @date : 11/3/21 8:34 PM
 */

namespace order_center\logic\event_function\create\submit;

class ToHomeSubmitCreate extends AbstractSubmitTemplate{

    //增加的方法
    public function SubmitType(){
        dump("到家场景");
        $arr['submitType'] = [
            222
        ];
        parent::SetOrderInfo($arr);
    }
}