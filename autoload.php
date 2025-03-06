<?php
    class autoload{
        public static function atuoloadFile($class){
            
            $className = $class . ".php";
           
            if($class =="dataUser"){
                $className = "view/".$className;
            }
            if($class =="dbConnection"){
                $className = "model/".$className;
            }
            if($class =="modelUser"){
                $className = "model/".$className;
            }
            if($class =="userContoroller"){
                $className = "contoroll/". $className;
            }
            if($class =="registerController"){
                $className = "contoroll/". $className;
            }
            if($class =="contorollerInterface"){
                $className = "interfaces/contorollerInterface/". $className;
            }
            
            if($class == "loadView"){
                $className ="view/".$className;
            }
            if(file_exists($className)){
                include("$className");
            }else{
                die("not eXists $className ");
            }
            
        }
    }
    $autoLoad = new autoload();
    spl_autoLoad_register(['autoload',"atuoloadFile"]);
?>