<?php
namespace Dealbao\Open\lib\basic;
use Dealbao\Open\core\Api;
class Area extends Api
{
    /**get all area list
     * @param array $params
     * @return bool|string
     */
    public function getAreaList(array $params = []){
        return $res = $this->request('Area/getAreaList',$params,'GET');
    }

    /**get area list by parent_id
     * @param array $params
     * @return bool|string
     */
    public function getSubAreaList(array $params = []){
        return $res = $this->request('Area/getSubAreaList',$params,'GET');
    }
}