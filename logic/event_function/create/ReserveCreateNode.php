<?php
/**
 * 预约订单，核心节点，具体构件
 *
 * @author : zhangyu
 * @date : 11/3/21 7:23 PM
 */

namespace order_center\logic\event_function\create;

class ReserveCreateNode implements InterfaceCreateComponent{

    public $orderInfo = [];

    public function __construct(array $orderInfo){
        $this->orderInfo = $orderInfo;
    }

    /**
     * 设置订单参数
     *
     * @param mixed $args
     * @return array
     * @auther zhangyu
     * @date 11/3/21 10:46 PM
     */
    public function SetOrderInfo(...$args){
        list($orderInfo) = $args;
        $this->orderInfo = array_merge($this->orderInfo, $orderInfo);
        return $this->orderInfo;
    }

    /**
     * 方便子类获取订单详情
     *
     * @return array
     * @auther zhangyu
     * @date 11/3/21 10:48 PM
     */
    public function GetOrderInfo(){
        return $this->orderInfo ;
    }

    /**
     * 创建订单信息，并入库
     *
     * @return mixed
     */
    public function OrderInfoCreate(){
        //TODO reserve 表数据入库
        dump("预约订单");
        return $this->orderInfo;
    }

}