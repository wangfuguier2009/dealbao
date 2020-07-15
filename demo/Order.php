<?php
require_once '../vendor/autoload.php';
#use Dealbao\Open\Client as RequestClient;#
//the package management without composer
// require_once '/path/to/deal-open-sdk/../vendor/autoload.php';

//Instantiate the caller
$config["access_token"] = 'your access_token';
//$config['secret'] = 'your secret';#在config文件已经填写的，该处可以不填
$Client = new Dealbao\Open\Client($config);

//get order list
$param['page'] = 1;
$param['size'] = 1;
$param['sort'] = ["order_sn"=>["order"=>"desc"]];
$param['order_sn'] = '209478517810081';
$param['goods_name'] = 'RD05彩屏智能手环心率蓝牙运动手环';
$param['order_state'] = 'wait_pay';
$param['order_sn'] = '209478517810081';
$param['buyer_name'] = '18166334886';
$param['shipping_code'] = '';
$param['buyer_phone'] = '18166334886';
$param['payment_code'] = 'online';
$param['goods_sku'] = '402f89fc460003';
$param['create_time'] = ['start_time'=>1591174551,'end_time'=>1591174551];
$res = $Client->Order->getOrderList($param);
var_dump($res);die;

//create application order
$param = [];
$time_stamp = time();
$nonce = md5($time_stamp);
$param['time_stamp'] = $time_stamp;
$param['nonce'] = $time_stamp;#不重复随机字符串
$param['items'] = json_encode(['254597101_2'=>1,'265111101_2'=>2]);
$param['trade_no'] = "GZ1253698542";#第三方订单号
$param['order_source'] = "app";#用户 user 应用 app
$param['appid'] = 'kj234nfygfl';#以上是购买人信息
$param['area_info'] = "中华人民共和国 四川省 邻水县 丰禾镇";
$param['address'] = "兴明村12对";
$param['true_name'] = "王权";
$param['mob_phone'] = "1888888888";
$param['order_message'] = '备注信息';
$res = $Client->Order->createAppOrder($param);
var_dump($res);






