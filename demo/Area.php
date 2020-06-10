<?php
require_once '../vendor/autoload.php';
#use Dealbao\Open\Client as RequestClient;#
//the package management without composer
// require_once '/path/to/deal-open-sdk/../vendor/autoload.php';

//Instantiate the caller
$config["access_token"] = 'your access_token';
$Client = new Dealbao\Open\Client($config);

//get area list
$param = [];
$param['language_id'] = 2;
$res = $Client->Area->getAreaList($param);
var_dump($res);

//get area list by parent_id
$param = [];
$param['area_id'] = 1;
$param['language_id'] = 2;
$res = $Client->Area->getSubAreaList($param);
var_dump($res);








