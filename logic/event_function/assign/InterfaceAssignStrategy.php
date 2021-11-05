<?php
/**
 * 订单分配策略
 *
 * @author : zhangyu
 * @date : 10/26/21 6:00 PM
 */

namespace order_center\logic\event_function\assign;

interface InterfaceAssignStrategy{

	/**
	 * 订单分发策略
	 *
	 * @return mixed
	 */
	public function DoAssignStrategy();

}