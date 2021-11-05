<?php
/**
 * 商城系统，具体工厂实现类
 *
 * @author : zhangyu
 * @date : 10/25/21 6:14 PM
 */

namespace order_center\logic\system_factory\shop;

use order_center\logic\system_factory\AbstractSystemFactory;

class ShopOrderFactory extends AbstractSystemFactory{

	/**
	 * 店铺自营单
	 *
	 * @return ShopChannel2Type1Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:19 PM
	 */
	public function NewChannel2Type1Product(){
		return new ShopChannel2Type1Product();
	}

	/**
	 * 平台自营单
	 *
	 * @return ShopChannel2Type2Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:19 PM
	 */
	public function NewChannel2Type2Product(){
		return new ShopChannel2Type2Product();
	}

}