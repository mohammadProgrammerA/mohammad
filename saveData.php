<?php
    class saveData extends container{
      
        public function __construct(){}
        public static function getPost(){
            return $_POST;
        }
    }
    // var_dump($_POST);
   