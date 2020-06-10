<?php
namespace Dealbao\Open\lib\token;
use Dealbao\Open\base\Http;
use Dealbao\Open\core\RequestUrl;
use Dealbao\Open\Config;
class AccessToken
{

    protected $appId;

    protected $appSecret;

    public function __construct($appId, $appSecret)
    {
        $this->appId = $appId;

        $this->appSecret = $appSecret;

    }

    /** 获取access_token
     * @param array $params
     */
    public function getAccessToken($param = []){

        $params = [

            'authorize_type' => 'authorization_token',

            'refresh' => isset($param['refresh'])?boolval($param['refresh']):false,

        ];

        return $this->exec($params);
    }

    /**刷新token
     * @param array $params
     */
    public function refreshAccessToken($refresh_token){

        $params = [

            'authorize_type' => 'refresh_token',

            'refresh_token' => $refresh_token,

        ];

        return $this->exec($params);

    }

    /**执行请求
     * @param $params
     * @return mixed
     */
    private function exec($params){

        $params['appid'] = $this->appId;

        $params['secret'] = $this->appSecret;

        $url = RequestUrl::buildAccessTokenUrl();

        return $this->parseResponse(Http::curlRequest($url,$params));

    }

    /**解析结果
     * @param $responseData
     * @return mixed
     */
    private function parseResponse($responseData){
        
        if (isset($responseData['success']) && $responseData['success']) {
            
            return $responseData['data'];
            
        }

        return $responseData;
    }
}
