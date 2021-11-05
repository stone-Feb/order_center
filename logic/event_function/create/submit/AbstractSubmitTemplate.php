<?php
/**
 * 订单提交方式，to_home 到家 to_store 到店
 *
 * @author : zhangyu
 * @date : 11/3/21 8:31 PM
 */

namespace order_center\logic\event_function\create\submit;

use order_center\logic\event_function\create\InterfaceCreateComponent;

abstract class AbstractSubmitTemplate implements InterfaceCreateComponent{

    protected $createNode = null ;

    public function __construct(InterfaceCreateComponent $createNode){
        $this->createNode = $createNode ;
    }

    //装饰者模式抽象装饰角色
    public function GetOrderInfo(){
        $this->createNode->GetOrderInfo();
    }

    public function SetOrderInfo(...$args){
        $this->createNode->SetOrderInfo($args);
    }

    public function OrderInfoCreate(){
        $this->SubmitType();
        $this->createNode->OrderInfoCreate();
    }

    //提交方式处理
    abstract public function SubmitType();

}