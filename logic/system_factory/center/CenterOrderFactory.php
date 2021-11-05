<?php
/**
 * 订单中心，实现了抽象工厂
 *
 * @author : zhangyu
 * @date : 10/25/21 4:37 PM
 */

namespace order_center\logic\system_factory\center;

use order_center\logic\system_factory\AbstractSystemFactory;

class CenterOrderFactory extends AbstractSystemFactory{

	/**
	 * 订单中心，平台预约单
	 *
	 * @return CenterChannel1Type0Product|void
	 * @auther zhangyu
	 * @date 10/25/21 5:56 PM
	 */
	public function NewChannel1Type0Product(){
		return new CenterChannel1Type0Product();
	}

	/**
	 * 订单中心，店铺预约单
	 *
	 * @return CenterChannel1Type1Product|void
	 * @auther zhangyu
	 * @date 10/25/21 5:59 PM
	 */
	public function NewChannel1Type1Product(){
		return new CenterChannel1Type1Product();
	}

	/**
	 * 平台口碑单
	 *
	 * @return CenterChannel1Type3Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:01 PM
	 */
	public function NewChannel1Type3Product(){
		return new CenterChannel1Type3Product();
	}

	/**
	 * 店铺自营单
	 *
	 * @return CenterChannel2Type1Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:02 PM
	 */
	public function NewChannel2Type1Product(){
		return new CenterChannel2Type1Product();
	}

	/**
	 * 平台自营单
	 *
	 * @return CenterChannel2Type2Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:03 PM
	 */
	public function NewChannel2Type2Product(){
		return new CenterChannel2Type2Product();
	}

}