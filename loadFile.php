<?php

    class loadFile{

        public $fileName;
        public function loadFile($fileName){
            echo "😎😀😎😀😎😎✌🏻😎😎😎😎$fileName";
            $fileName  =  $fileName .".php";
            // $this ->fileName = $fileName;
            $this ->fileName = $fileName;
            // echo "start 😊</br>";
            //     echo $fileName ."</br>";
            // echo "end 😊</br>";

            
            if(file_exists($fileName)){
                // if($fileName =='$usercontorller.php'){
                //     echo "ok mohammad";
                // }
                // if($fileName == ){}
                include ($fileName);
            }
            if(!file_exists($fileName)){
                include("404.php");
            }
        }
        public function fileName(){
            return $this -> fileName;
        }
    }
?>