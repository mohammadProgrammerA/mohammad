<?php
    class factoryAndSingleton{

        private function __construct(){}
        public  static $insatance=[];
        public static function instance($className,$bool = false){
            if($bool){
                if(!isset(self :: $insatance[$className])){
                    self :: $insatance[$className]= new $className();
                }
                return self:: $insatance[$className];
            }else{
                return new $className;
            }
        }
    }
?>