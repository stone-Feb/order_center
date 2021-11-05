<?php
/**
 * 下单事件，顶层接口，抽象构件
 *
 * 装饰者实现
 * @author : zhangyu
 * @date : 10/29/21 4:41 PM
 */

namespace order_center\logic\event_function\create;

interface InterfaceCreateComponent{

    /**
     * 订单信息入库
     *
     * @return mixed
     */
    public function OrderInfoCreate();

    /**
     * 子类设置订单数据
     *
     * @param mixed ...$args
     * @return mixed
     * @auther zhangyu
     * @date 11/3/21 10:58 PM
     */
    public function SetOrderInfo(...$args);

    /**
     * 方便子类获取订单数据
     *
     * @return mixed
     * @auther zhangyu
     * @date 11/3/21 10:52 PM
     */
    public function GetOrderInfo();
}