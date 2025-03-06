<?php
    class  registerController implements contorollerInterface{
        public function insertUsersRegister($data,$id){
            modelUserRegister ::insert($data,$id); 
        }
        public function getUserId($token){
            return modelUserRegister ::findUserId($token);  
        }
        public function getToken($userId){
            return modelUserRegister ::findToken($userId);
        }
    }
?>