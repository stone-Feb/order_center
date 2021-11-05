<?php
/**
 * 订单pattern（模式）
 * 装饰者模式-具体构件角色
 *
 * @author : zhangyu
 * @date : 10/29/21 4:54 PM
 */

namespace order_center\logic\event_function\create\pattern;


use order_center\logic\event_function\create\InterfaceCreateComponent;

abstract class AbstractPatternTemplate implements InterfaceCreateComponent{

    protected $createNode = null ;

    public function __construct(InterfaceCreateComponent $createNode){
        $this->createNode = $createNode ;
    }

    //抽象装饰者角色
    public function GetOrderInfo(){
        $this->createNode->GetOrderInfo();
    }

    public function SetOrderInfo(...$args){
        $this->createNode->SetOrderInfo($args);
    }

    public function OrderInfoCreate(){
        $this->OrderPattern();
        $this->createNode->OrderInfoCreate();
    }

    //订单pattern实现
    abstract public function OrderPattern();

}