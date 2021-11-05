<?php
/**
 * 实现不同的优惠计算模版-抽象模版方式
 * 装饰者模式
 *
 *
 * @author : zhangyu
 * @date : 10/25/21 6:34 PM
 */

namespace order_center\logic\event_function\create\discount;

use order_center\logic\event_function\create\InterfaceCreateComponent;

abstract class AbstractDiscountTemplate implements InterfaceCreateComponent{

    protected $createNode;

    public function __construct(InterfaceCreateComponent $createNode){
        $this->createNode = $createNode ;
    }

    public function GetOrderInfo(){
        $this->createNode->GetOrderInfo();
    }

    public function SetOrderInfo(...$args){
       $this->createNode->SetOrderInfo($args);
    }

    //订单信息入库-模版方式实现
    public function OrderInfoCreate(){
        $this->GetDiscountTemplate();
       $this->createNode->OrderInfoCreate();
       $this->CheckDiscountTemplate();
    }

    //模版方法结构
    protected abstract function GetDiscountTemplate();

    protected abstract function CheckDiscountTemplate();
}