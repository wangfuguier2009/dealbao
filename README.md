## dealbao-open-sdk使用：

## 一、下载方式：

​		composer地址：https://packagist.org/packages/dealbao/service

​		composer 命令：composer require dealbao/service 

​		github地址：https://github.com/wangfuguier2009/dealbao

## 二、使用方式：

​		如你的框架有自动加载，则直接使用

​		如框架无法自动加载 require_once '../vendor/autoload.php';#这点的路径使用你自己的路径

## 三、填写配置:

​		找到配置文件，config.php,填写你的appid和secret

### 四、客户端实例化（具体可参考demo）

##### 		1.获取access_token时

```
#use Dealbao\Open\Client as RequestClient;
// require_once '/path/to/deal-open-sdk/../vendor/autoload.php';

//Instantiate the caller
$Client = new Dealbao\Open\Client();
```

​	 这点使用了config里面的配置，如需要自己传入，则使用下面这个方式

```
$config['appid'] = 'your appid';
$config['secret'] = 'your secret';
//Instantiate the caller
$Client = new Dealbao\Open\Client($config);
```



##### 		2.请求其他接口时的客户端实例

​			在实例化的时候，传入access_token

```
//Instantiate the caller
$config["access_token"] = '36B6E53FA87D611E90D8BD17BD6CE1AB';
$Client = new Dealbao\Open\Client($config);
```

### 

## 五、请求示例（具体可参考demo）

​		获取语言列表

```
//Instantiate the caller
$config["access_token"] = '72A3B9F45EE104C960E7086472A7ADD2';
$Client = new Dealbao\Open\Client($config);

//get  support language
$res = $Client->Lang->getLangList();
var_dump($res);
	
```

​		根据分类获取商品列表（其中参数以官网：接口中规定的参数为准）

```
$param = [];
$param['gc_id'] = 3;
$param['level'] = 3;
$param['language_id'] = 2;
$res = $Client->Goods->getGoodsListByCate($param);
```