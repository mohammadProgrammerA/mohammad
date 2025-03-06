<?php
    class loadView extends container{
        public static function index($fileName,$data = null){
        //    print_r($_POST);
            // if($fileName =="home" ||  $fileName =="showUsers" || $fileName == "userForm" || $fileName == "editeUserForm" || $fileName ="deleteUser" || $fileName =="insertForm"){
            //     include("view/menu.php");
            //     echo $fileName ."🙄😶😑";
            // }
            // echo $fileName ."🙄😶😑";
          
            include("view/menu.php");
            $fileName = $fileName .".php";
            
            if(file_exists("view/" . $fileName)){
                    include( $fileName);
            }
            if(!file_exists("view/". $fileName)){
                    include("404.php");
            }
            
        }
    }
   
 ?>