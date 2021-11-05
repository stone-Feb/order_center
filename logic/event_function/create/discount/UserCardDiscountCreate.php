<?php
/**
 * 卡抵扣
 *
 * @author : zhangyu
 * @date : 10/25/21 6:44 PM
 */

namespace order_center\logic\event_function\create\discount;

class UserCardDiscountCreate extends AbstractDiscountTemplate{

    protected function GetDiscountTemplate(){
        dump("获取优惠");
        $orderInfo = parent::GetOrderInfo();
        $arr['discount'] = [
            111
        ];
        parent::SetOrderInfo($arr);
    }

    protected function CheckDiscountTemplate(){
        dump("核销卡券");
    }
}