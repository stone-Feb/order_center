<?php
/**
 * 抽象工厂实现，订单系统分类
 *
 * @author : zhangyu
 * @date : 10/25/21 4:28 PM
 */

namespace order_center\logic\system_factory;

abstract class AbstractSystemFactory{

	/**
	 * 平台预约单
	 * 抽象工厂：提供了厂品的生成方法
	 *
	 * @auther zhangyu
	 * @date 10/25/21 4:36 PM
	 */
	abstract public function NewChannel1Type0Product();

	/**
	 * 店铺预约单
	 *
	 * @auther zhangyu
	 * @date 10/25/21 5:36 PM
	 */
	abstract public function NewChannel1Type1Product();

	/**
	 * 平台自营单（拼团）
	 *
	 * @auther zhangyu
	 * @date 10/25/21 5:36 PM
	 * @deprecated
	 */
	//	public function NewChannel1Type2Product(){}

	/**
	 * 平台口碑单
	 *
	 * @auther zhangyu
	 * @date 10/25/21 5:36 PM
	 */
	abstract public function NewChannel1Type3Product();

	/**
	 * 店铺自营单
	 *
	 * @auther zhangyu
	 * @date 10/25/21 5:32 PM
	 */
	abstract public function NewChannel2Type1Product();

	/**
	 * 平台自营单
	 *
	 * @auther zhangyu
	 * @date 10/25/21 5:32 PM
	 */
	abstract public function NewChannel2Type2Product();

}