<?php
    class modelUserRegister extends dbConnection{
        
        protected static $table = "usersregister";
        public static function insert($data,$id){
            $userName = $data["userName"];
            $pass = $data["password"];
            $mix = $userName . $pass;
            $hash = sha1($mix);
            $table = self :: $table;
            $query = "INSERT INTO $table (userid,token) VALUES ('$id','$hash')";
            return  self:: $connection ->query($query);  
        }

        public static function findUserId($token){
            $table = self :: $table;
            $query = "SELECT userid FROM $table WHERE token= '" .$token ."'";
            $result = self:: $connection ->query($query);
            return $result ->fetch_assoc();
        }

        public static function findToken($userId){
            $table = self :: $table;
            $query = "SELECT token FROM $table WHERE userid = '".$userId."'";
             $result = self:: $connection ->query($query);
             return $result ->fetch_assoc();
        }



        // public static function selectedData(){
        //     $arrayUser=[];
        //     $selectAll = self :: allUser();
        //     while($rowUser=$selectAll->fetch_assoc()){
        //         $arrayUser[]=$rowUser;
        //     }
        //     return $arrayUser;
        // }
       
        // public static function updateUser($data){
        //     $table = self :: $table;
        //     $name = $data['name'];
        //     $family = $data['family'];
        //     $age = $data['age'];
        //     $id = $data["editeId"];
        //     $query="UPDATE $table SET name =\"$name\"  , family =\"$family\" , age = \"$age\" WHERE id =".$id;
        //     return self :: $connection ->query($query);
        // }
    }

    //  $facade = new facade (modelUser::getObject());
       
?>