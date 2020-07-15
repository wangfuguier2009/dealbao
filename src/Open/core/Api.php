<?php
namespace Dealbao\Open\core;

use Dealbao\Open\base\Http;
use Dealbao\Open\core\RequestUrl;

class Api
{

    private $accessToken;

    protected $secret = '';

    protected $appid = '';

    public function __construct(string $accessToken,$secret = '')
    {

        $this->accessToken = $accessToken;

        !empty($secret) && $this->secret = $secret;



    }

    /**请求
     * @param $method
     * @param array $params
     */
    public function request($path,array $params = [],$request_type = 'POST',$signature=null){

        $params['access_token'] = $this->accessToken;

        $signature &&  $params['signature'] = Helper::createSinature($params,$this->secret);

        $res = Http::curlRequest(RequestUrl::buildRequestUrl($path),$params,$request_type);

        !empty($res['signature']) && Helper::checkSignature($res,$this->secret);

        return $res;
    }


}