<?php

interface dataBaceConnection{
    public static function allUser();
    public static function find($id);
    public static function delet($id);
}


class dbConnection implements dataBaceConnection {
    private static $server="localhost";
    private static $user = "root";
    private static $password ="";
    private static $dbName="router-MVC";
    protected static $connection;
    protected static $table;
    public function __construct(){
        self :: $connection = new mysqli(self:: $server,self :: $user,self :: $password,self::$dbName);
    }

    public static function allUser(){
        $table = static :: $table;
        $query = "SELECT * FROM $table";
        return self :: $connection ->query($query);
    }
    
    public static function find($id){
        // $id = (int) $id;
        echo $id;
        $table = static :: $table;
        $findQ="SELECT * FROM $table WHERE id=".$id;
        $result = self ::$connection->query($findQ);
        return $result ->fetch_assoc();
    }


    public static function getUserId($data){
        $table = static :: $table;
        $findQ="SELECT id FROM $table WHERE username='".$data."'";
        $result = self ::$connection->query($findQ);
        return $result ->fetch_assoc();
    }



    public static function delet($id){
        $table = static :: $table;
        $deletQ = "DELETE FROM $table WHERE id=".$id;
        self ::$connection->query($deletQ);
    }
}
container :: bind("dataBaceConnection" , dbconnection :: class);
container ::singleton("dataBaceConnection");





















// <?php

// interface dataBaceConnection{
//     public static function allUser();
//     public static function find($id);
//     public static function delet($id);
// }


// class dbConnection extends container implements dataBaceConnection {
//     private static $server="localhost";
//     private static $user = "root";
//     private static $password ="";
//     private static $dbName="router-MVC";
//     protected static $connection;
//     protected static $table;
//     function __construct(){
//         echo "ok";
//         self :: $connection = new mysqli(self:: $server,self :: $user,self :: $password,self::$dbName);
//     }

//     public static function allUser(){
//         var_dump(self :: $connection );
//         $table = static :: $table;
//         $query = "SELECT * FROM $table";
//         return self :: $connection ->query($query);
//     }
    
//     public static function find($id){
//         $table = static :: $table;
//         $findQ="SELECT * FROM $table WHERE id=".$id;
//         $result = self ::$connection->query($findQ);
//         return $result ->fetch_assoc();
//     }
//     public static function delet($id){
//         $table = static :: $table;
//         $deletQ = "DELETE FROM $table WHERE id=".$id;
//         self ::$connection->query($deletQ);
//     }
// }
// $db = dbConnection :: makeObject();
// $db();

































// $dbConnection = new dbConnection();
    // echo "<br> dbCon <br>";
    // class dbConnection{
    //     public $connection;
       
    //     function __construct($server,$user,$password,$dbName){
    //         $this -> connection = new mysqli($server,$user,$password,$dbName);
    //     }
    //     public function test(){
    //          var_dump($this -> connection);
    //     }
    // }
    // $server="localhost";
    // $user = "root";
    // $password ="";
    // $dbName="router-MVC";
    // $dbConnection = new dbConnection($server,$user,$password,$dbName);
    // $dbConnection -> test();



//     class dbConnection{
//         private $server="localhost";
//         private $user = "root";
//         private $password ="";
//         private $dbName="router-MVC";
//         protected $connection;
//         protected $table;
//         function __construct(){
//             $this -> connection = new mysqli($this -> server,$this -> user,$this -> password,$this -> dbName);
//         }
//     }
//     // $server="localhost";
//     // $user = "root";
//     // $password ="";
//     // $dbName="router-MVC";
//     $dbConnection = new dbConnection();







































// $dbConnection = new dbConnection();
    // echo "<br> dbCon <br>";
    // class dbConnection{
    //     public $connection;
       
    //     function __construct($server,$user,$password,$dbName){
    //         $this -> connection = new mysqli($server,$user,$password,$dbName);
    //     }
    //     public function test(){
    //          var_dump($this -> connection);
    //     }
    // }
    // $server="localhost";
    // $user = "root";
    // $password ="";
    // $dbName="router-MVC";
    // $dbConnection = new dbConnection($server,$user,$password,$dbName);
    // $dbConnection -> test();



//     class dbConnection{
//         private $server="localhost";
//         private $user = "root";
//         private $password ="";
//         private $dbName="router-MVC";
//         protected $connection;
//         protected $table;
//         function __construct(){
//             $this -> connection = new mysqli($this -> server,$this -> user,$this -> password,$this -> dbName);
//         }
//     }
//     // $server="localhost";
//     // $user = "root";
//     // $password ="";
//     // $dbName="router-MVC";
//     $dbConnection = new dbConnection();
// ?>