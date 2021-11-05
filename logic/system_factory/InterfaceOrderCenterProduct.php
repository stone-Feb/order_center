<?php
/**
 * 抽象产品：提供了产品的接口
 *
 * @author : zhangyu
 * @date : 10/25/21 5:15 PM
 */

namespace order_center\logic\system_factory;

interface InterfaceOrderCenterProduct{

	/**
	 * 订单创建动作
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCreateAction(...$args);

	/**
	 * 订单支付动作
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderPayAction(...$args);

	/**
	 * 取消订单动作
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCancelAction(...$args);

	/**
	 * 订单退款动作
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderRefundAction(...$args);

	/**
	 * 订单完成动作
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCompleteAction(...$args);
}