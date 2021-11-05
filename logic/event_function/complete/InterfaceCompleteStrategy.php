<?php
/**
 * @author : zhangyu
 * @date : CreateTime
 */

namespace order_center\logic\event_function\complete;

interface InterfaceCompleteStrategy{

	/**
	 * TODO : 缺少策略工厂
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function doStrategy(...$args);

}