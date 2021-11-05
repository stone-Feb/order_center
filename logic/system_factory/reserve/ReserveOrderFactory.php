<?php
/**
 * 预约订单，具体工厂实现类
 *
 * @author : zhangyu
 * @date : 10/25/21 6:07 PM
 */

namespace order_center\logic\system_factory\reserve;

use order_center\logic\system_factory\AbstractSystemFactory;

class ReserveOrderFactory extends AbstractSystemFactory{

	/**
	 * 预约系统，平台预约单
	 *
	 * @return ReserveChannel1Type0Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:11 PM
	 */
	public function NewChannel1Type0Product(){
		return new ReserveChannel1Type0Product();
	}

	/**
	 * 预约系统，店铺预约单
	 *
	 * @return ReserveChannel1Type1Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:13 PM
	 */
	public  function NewChannel1Type1Product(){
		return new ReserveChannel1Type1Product();
	}

	/**
	 * 预约系统，平台口碑单
	 *
	 * @return ReserveChannel1Type3Product|void
	 * @auther zhangyu
	 * @date 10/25/21 6:13 PM
	 */
	public function NewChannel1Type3Product(){
		return new ReserveChannel1Type3Product();
	}
}