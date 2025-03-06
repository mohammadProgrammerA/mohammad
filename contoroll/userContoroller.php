<?php


class userContoroller implements contorollerInterface{
    public function setDependency($object = null){}
    public function goToshowUsers(){
        $data = modelUser :: selectedData();
        loadView :: index("showUsers",$data);
    }
    public function goToHome(){
        loadView :: index("getHome");
    }
    public function goToUserForm(){
        loadView :: index("userForm");
    }


    public function goToInsert($post){
    $result = modelUser :: insert($post);
        if($result){
            loadView :: index("notiftInsert");
            $registerContoroller = $this ->makeRegistercontoroller();
            $id = $this -> getIdUser($post["userName"]);
            
            $registerContoroller -> insertUsersRegister($post,$id);
        }
    }

    public function getIdUser($data){
        return $data = modelUser :: getUserId($data);
    }

    public function makeRegistercontoroller(){
        container::bind("contorollerInterface","registerController");
        return container::singleTon("contorollerInterface");
    }


    public function goToEdidUserForm($id){
        // $id = (int) 
        $data = modelUser :: find($id["id"]); 
        // print_r($data) ;
        loadView :: index("editeUserForm",$data);
    }
    public function goToUpdataUser($data){
        echo "<br>";
        echo "😏😏";
        var_dump($data);
        $result =modelUser :: updateUser($data);
        if($result){
            loadView :: index("updatedUser");
        }
    }
    public function goToDeletUser(array $id){
        //  var_dump($id["id"]);
        $delet = "deleted use withs" . $id['id'];
        modelUser :: delet($id["id"]);
        loadView :: index("deleteUser",$delet);
    }
    // public function goToSaveData(){
    //     loadView :: index("saveData");
    // }
}







//-----------------------------------------------------------------------------------------------------------
// interface interfaceUserContoroller{
//     public function goToshowUsers();
// }
// class userContoroller extends container implements interfaceUserContoroller{
//     public function setDependency($object = null){}
//     public function goToshowUsers(){
//         $data = modelUser :: selectedData();
//         loadView :: index("showUsers",$data);
//     }
//     public function goToHome(){
//         loadView :: index("getHome");
//     }
//     public function goToUserForm(){
        
//         loadView :: index("userForm");
//     }
//     public function goToInsert($post){
//     $result = modelUser :: insert($post);
//         if($result){
//             loadView :: index("insertForm");
//         }
//     }
//     public function goToEdidUserForm($id){
//         $id = (int) $id;
//         $data = modelUser :: find($id); 
//         loadView :: index("editeUserForm",$data);
//     }
//     public function goToUpdataUser($data){
//         $result =modelUser :: updateUser($data);
//         if($result){
//             loadView :: index("updatedUser");
//         }
//     }
//     public function goToDeletUser($id){
//         $delet = "deleted use withs $id";
//         modelUser :: delet($id);
//         loadView :: index("deleteUser",$delet);
//     }
//     // public function goToSaveData(){
//     //     loadView :: index("saveData");
//     // }
// }

// class vistior{

// }





//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@




// $modelUser = modelUser :: getObject();
// $modelUser -> allUser();
// class userContoroller extends singleton{
//     // public $modelUser;
//     // public $loadView;
//     // private static $instance= null;
    
//     protected  function __construct(){
//         // echo "ok😎✌🏻😎hgthghgh👏🏻😑";
//     }
//     // protected function __clone(){}
//     // public function makeObjects(){
        
//     //     $this ->modelUser  = new modelUser();
//     //     $this -> loadView = new loadView();
//     // }
//     // public static function makeObject(){

//     //     if(self :: $instance ==null){
//     //         return self :: $instance = new userContoroller();
//     //     }

//     // }
//     public function goToshowUsers(){
//         // echo "this is a go to show Users";
//         // $data = $this -> modelUser ->selectedData();
//         // $this -> loadView->index("showUsers",$data);
//     }
//     public function test(){
//         echo "this is a test ";
//     }

    // public function goId($id){
    //    $this -> id = $id;
    // }

    // public function goToHome(){
    //     $this ->loadView->index("home");
    // }
    // public function goToInsert($request,$data){
        
    //     $this -> modelUser -> insert($data);
    //     $this -> loadView -> index("insertForm");
    // }


    // public function goToUserForm(){
    //     $this ->loadView->index("userForm");
    // }
    // public function goToEdidUserForm(){
    //     $data = $this -> modelUser -> find($this->id); 
    //     $this->loadView -> index("editeUserForm",$data);
    // }
    // public function goToDeletUser(){
    //     echo "😑";
    //     $data = "deleted use withs {$this ->id}";
    //     $this -> modelUser -> delet($this ->id);
    //     $this-> loadView -> index("deleteUser",$data);
    // }
    // public function goToUpdata($data){
    //     $this -> modelUser -> updateUser($data);
    // }
   




    // public function sendToView(){
    //     self :: $loadView ->index("showUsers",$this->getSeLectFromModel()); 
    // }
    // public function sendToModelUser($data){
    //     echo "😯🤐";
    //     self :: $modelUser -> insert($data);
    //     echo "this is a userContorller 😀";
    // }
    // public function getSeLectFromModel(){
    //     $data=self :: $modelUser->selectedData();
    //     return $data;
    // }
    // public function getFindSelectFromModel(){

    // } 
// }
// $userContoroller = userContoroller :: makeObject();













    // // include ("./vew/dataUser.php");

    // class userContoroller{
    
    //     private $modelUser;
    //     // private $data;
    //     public function __construct($modelUser){
    //         echo "this is a userContorller 😀";
    //         $this -> modelUser = $modelUser;
    //         $this ->sendToModelUser();
    //     }
    //     // public  function getDataAsDataUser($data){
    //     //     // var_dump($data);
    //     //     $this ->data = $data;
    //     //     $this -> sendToModelUser();
    //     // }
    //     public function sendToModelUser(){
    //         $data =$_POST;
    //         $this -> modelUser -> insert($data);
    //         // echo "this is a userContorller 😀";
    //     }
    //     // public function getSeLectFromModel(){
    //     //     $data=$this->modelUser->selectedData();
    //     // }
       
    // }
    // $userContoroller = new userContoroller($modelUser);
    
    // // $userContoroller -> sendToModelUser();


?>