<?php
/**
 * User: Parker
 * Date: 2018/6/27
 * Time: 17:00
 */

namespace Postal\CommonTools;
//require_once "Redis.class.php";
class Postal_Info {
    private $redis = null;
    
    public function __construct() {
        $redisClass = new Redis();
        $this->redis = $redisClass->getRedis();
    }
    
    public function addPostalCode($postal_code) {
        $key = sprintf('%s:postal_code', EventName);
        $this->redis->sadd($key, $postal_code);
    }

    public function getAllPostalCode() {
        $key = sprintf('%s:postal_code', EventName);
        $postal_codes = $this->redis->smembers($key);
        return $postal_codes;
    }
    
    public function updatedPostalCodeToRedis() {
        var_dump(getPostalInfo());
    }
    
    public function updatedCity() {
    
    }
    
    public function test() {
        echo "test go!";
    }
}


