<?php

namespace Dealbao\Open\lib\goods;

use Dealbao\Open\core\Api;

class Collect extends Api
{
    /**
     * get collected group list
     * @param array $params
     * @return bool|string
     */
    public function getCollectGroup(array $params)
    {
        return $res = $this->request('Collect/getCollectGroup', $params, 'GET');
    }

    /**
     * get collect goods by group
     * @param array $param
     * @return bool|string
     */
    public function getCollectGoodsByGroup(array $param)
    {
        return $res = $this->request('Collect/getCollectGoodsByGroup', $param, 'POST');
    }

    /**
     * delete goods by spu
     * @param array $param
     * @return bool|string
     */
    public function deleteCollectGoodsBySpu(array $param)
    {
        return $res = $this->request('Collect/deleteCollectGoodsBySpu', $param, 'DELETE');
    }

    /**
     * get collect goods count
     * @param array $param
     * @return bool|string
     */
    public function getCollectCountByGroup(array $param)
    {
        return $res = $this->request('Collect/getCollectCountByGroup', $param, 'GET');
    }

    /**
     * get download list
     * @param array $param
     * @return bool|string
     */
    public function downloadGoodsList(array $param)
    {
        return $res = $this->request('Collect/downloadGoodsList', $param, 'GET');
    }

    /**
     * get download list
     * @param array $param
     * @return bool|string
     */
    public function getGoodsByCollectGroup(array $param)
    {
        return $res = $this->request('Collect/getGoodsByCollectGroup', $param, 'GET');
    }

}