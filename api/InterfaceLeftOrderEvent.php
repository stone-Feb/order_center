<?php
/**
 * 反向订单操作接口
 *
 * @author : zhangyu
 * @date : 10/25/21 2:54 PM
 */

namespace order_center\api;

interface InterfaceLeftOrderEvent{

	/**
	 * 订单取消事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCancelEvent(...$args);

	/**
	 * 订单退款事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderRefundEvent(...$args);

	/**
	 * 服务更换人员
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderChangeEvent(...$args);

	/**
	 * 订单投诉事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderComplaintEvent(...$args);

}