<?php
    // include("dbConnection.php");
    // $dbConnection = new dbConnection();
    // class facade {
        
    //    private $modelUser;
    //     function __construct(modelUser $modelUser){
    //         $this -> modelUser = $modelUser;
    //         echo "this is a facade ";
    //     }
    //     public static function insert(){}
    //     public static function selectedData(){}
    //     public static function updateUser($data){}
    //     public static function allUser(){}
    //     public static function find($id){}
    //     public static function delet($id){}
    // }
   
    class modelUser extends dbConnection{
        
        protected static $table = "user";
        public static function insert($data){
            var_dump($data);
            $name = $data['name'];
            $family = $data['family'];
            $age = $data['age'];
            $table = self :: $table;
            $query = "INSERT INTO $table (name,family,age) VALUES ('$name','$family','$age')";
            return  self:: $connection ->query($query);
            
        }
        public static function selectedData(){
           
            $arrayUser=[];
            $selectAll = self :: allUser();
            while($rowUser=$selectAll->fetch_assoc()){
                $arrayUser[]=$rowUser;
            }
            return $arrayUser;
        }
       
        public static function updateUser($data){
            $table = self :: $table;
            $name = $data['name'];
            $family = $data['family'];
            $age = $data['age'];
            $id = $data["editeId"];
            $query="UPDATE $table SET name =\"$name\"  , family =\"$family\" , age = \"$age\" WHERE id =".$id;
            return self :: $connection ->query($query);
        }
    }

    //  $facade = new facade (modelUser::getObject());
       
?>