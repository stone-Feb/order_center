<?php
/**
 * 订单中心，商家操作API
 *
 * @author : zhangyu
 * @date : 10/25/21 2:27 PM
 */

namespace order_center\api;

class BusinessOrderCenterApi implements InterfaceRightOrderEvent{

	/**
	 * 订单创建事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCreateEvent(...$args){
		// TODO: Implement OrderCreateEvent() method.
	}

	/**
	 * 订单支付事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderPayEvent(...$args){
		// TODO: Implement OrderPayEvent() method.
	}

	/**
	 * 订单分发事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderAssignEvent(...$args){
		// TODO: Implement OrderAssignEvent() method.
	}

	/**
	 * 订单指派事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderAppointEvent(...$args){
		// TODO: Implement OrderAppointEvent() method.
	}

	/**
	 * 抢单事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderAcceptEvent(...$args){
		// TODO: Implement OrderAcceptEvent() method.
	}

	/**
	 * 服务确定事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderConfirmEvent(...$args){
		// TODO: Implement OrderConfirmEvent() method.
	}

	/**
	 * 完成订单事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderCompleteEvent(...$args){
		// TODO: Implement OrderCompleteEvent() method.
	}

	/**
	 * 评价事件
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function OrderEvaluateEvent(...$args){
		// TODO: Implement OrderEvaluateEvent() method.
	}
}