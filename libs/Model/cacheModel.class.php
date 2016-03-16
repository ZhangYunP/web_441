<?php 
class cacheModel{
    public static $cache;
    public function __construct() {
		self::$cache=new Cache();
	}
	
    public function getsessid($key){
        $sessid=self::$cache->cacheData($key, "" ,0);
         return $sessid; 
    }
    
    public function setsessid($key,$value ){
        $sessid=self::$cache->cacheData($key, $value, 99999);
        return $sessid;
    }
}
?>