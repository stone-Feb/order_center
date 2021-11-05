<?php
/**
 * 正向订单操作流
 *
 * @author : zhangyu
 * @date : 10/25/21 2:34 PM
 */

namespace order_center\api;

interface InterfaceRightOrderEvent{

	/**
	 * 订单创建事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCreateEvent(...$args);

	/**
	 * 订单支付事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderPayEvent(...$args);

	/**
	 * 订单分发事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderAssignEvent(...$args);

	/**
	 * 订单指派事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderAppointEvent(...$args);

	/**
	 * 抢单事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderAcceptEvent(...$args);

	/**
	 * 服务确定事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderConfirmEvent(...$args);

	/**
	 * 完成订单事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCompleteEvent(...$args);

	/**
	 * 评价事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderEvaluateEvent(...$args);
}