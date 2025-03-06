<?php
    class applacation extends container{
        public static function makeObjectRequest(string $request){
            $re = $request :: makeObject($request);
            return $re();
           
        }
        public static function makeObjectRouter(string $router){
            $ro = $router :: makeObject($router);
            return $ro();
        }
        public static function makeObjectContoroller(string $contoroller){
            $co = $contoroller :: makeObject($contoroller);
            return $co();
        }
        public static function makeObjectSaveData(string $saveData){
            $se = $saveData :: makeObject($saveData);
            return $se();
        }
    }
    
?>