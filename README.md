# FSM

事件触发状态转移，状态转移触发后续动作。

## 订单中心架构设计

> 设计模式如何提升 vivo 营销自动化业务扩展性 | 引擎篇01  https://mp.weixin.qq.com/s/F0BFvFvufPJ7AdkguHTcwQ

**设计模式**

1. 模板方法模式进行业务流程公共骨架的抽取;
2. 策略模式进行具体子流程策略的实现和调用的封装;
3. 而工厂模式可以进行子流程策略的创建。

## 模块设计

### 需要解决的问题

1. 多操作者
    - 平台
    - 商家
    - 用户
2. 多个不同的订单系统
    - 系统
       · 订单中心
       · 预约系统
       · 商城系统
    - 行业
       · 到家
       · 到店
    - 类型
       · 预约
       · 商城
    - 模式
       · master
       · shop_order
       · transform_order
3. 多种订单的操作和状态 
    - 状态：未付款、匹配中、待服务、服务中、待结款、已完成、已评价
    - 操作：下单、支付、接单、指派、抢单、上门、设尾款、码核销
    - 反操作：取消、退款、投诉、申诉

### 设计模式的应用

1. 抽象工厂方法：logic/system_factory
    - 区分系统
    - 区分类型

2. 策略工厂
    - 完成方式：work_flow_function/complete
    - 派发方式：work_flow_function/assign

3. 模版方法
    - 订单创建-计算优惠：work_flow_function/create
    
4. 装饰者模式
    - 订单创建-多种功能集成：work_flow_function/create
        - pattern模式
        - 行业分类
4. 代理模式
    - api实现：order_center_library/api