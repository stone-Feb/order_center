<?php
/**
 * 商家发单
 *
 * @author : zhangyu
 * @date : 11/3/21 8:38 PM
 */

namespace order_center\logic\event_function\create\pattern;

use order_center\logic\event_function\create\InterfaceCreateComponent;

class StoreSubmitPatternCreate extends AbstractPatternTemplate{

    public function OrderPattern(){
        dump("商家发单");
        $arr['pattern'] = [
            333
        ];
        parent::SetOrderInfo($arr);
    }
}