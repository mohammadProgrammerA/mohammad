<?php

interface ruoterInterface {}

class router implements ruoterInterface{
    public function makeAnalyze (){
        container::bind("analyzeInterface","analyze");
        return  container::singleton("analyzeInterface");
    }
    
    public function analize($request){

        return  $this -> makeAnalyze()->analyze($request);
        
    }
    public function post(array $adderess){
        
        $result =$this -> analize($adderess[0]);
        var_dump($result);
        $method=$result[0][1];
        if($result[2]){  /* اگر آیدی باشد*/
            container :: bind("interfaceUserContoroller" , $result[0][0]);
            container :: singleton("interfaceUserContoroller")->$method($result[2]);
        }else{
            if($adderess[1]){  /* هست $_POST  این همان */
                container :: bind("interfaceUserContoroller" , $result[0][0]);
                container :: singleton("interfaceUserContoroller")->$method($adderess[1]);
            }else{
                container :: bind("interfaceUserContoroller" , $result[0][0]);
                container :: singleton("interfaceUserContoroller")->$method();
            }  
        }

       
    }
}


























 // $requestsArray = $this -> prev($adderess[1],$adderess[2]);
        // foreach($requestsArray as $key =>$requests){
        //     if($adderess[0] == $key){
        //         $method = $requests[1];

        //         if(count($requestsArray[$key]) ==2){
        //             container :: bind("interfaceUserContoroller" , $requests[0]);
        //             container :: singleton("interfaceUserContoroller")->$method();
        //         }
        //         if(count($requestsArray[$key]) ==3){
        //             container :: bind("interfaceUserContoroller" , $requests[0]);
        //             container :: singleton("interfaceUserContoroller")->$method($requests[2]);
        //         }
        //     }
        // } 














// class sendPost extends singleton{
//     public function sendPost(interfaceUserContoroller $userContoroller){
//         // $userContoroller = userContoroller :: getObject();
//         $userContoroller -> post($_POST);
//     }
// }
// // $sendPost = new sendPost();
// $sendPost = sendPost :: getObject();

// $sendPost -> sendPost($userContoroller = userContoroller :: getObject());













// $m = new sendPost();
// $m->sendPost();
// function sendPostToUserContoroller(){
//     $userContoroller = userContoroller :: getObject();
//     // userContoroller :: post($_POST);
// }
// sendPostToUserContoroller();




















        // $endRequest = (int) $requests[0];
        // if($endRequest){
        //     $this ->userContoroller ->goId($endRequest);
        //     if($requests[1] == "editeUserForm"){
        //         $this -> userContoroller -> goToEdidUserForm();
        //     }
        //     if($requests[1] == "deleteUser"){
        //         $this -> userContoroller -> goToDeletUser();
        //     }
        // }


//  if(array_key_exists($requests[0], $requestsArray)){
        //         foreach($requestsArray as $key => $adderss ){
        //         print_r($adderss[1]);
        //         // echo $adderss[1];
        //             // $object = $adderss[0] :: getObject();
        //             // $object ->$adderss[1]();
        //         // $object ->goToshowUsers();
        //     }; 
        // }
        //
    // }
        // protected  function __construct(){
        //     // $this ->getContoroller();          
        // }
        // public function getContoroller(){
        //     return $userContoroller = userContoroller :: getObject();
        // }
    // }

























// // $request = new request();
// $result = userContoroller :: getObject();
// // $request = request :: getObject();
// // $request -> test();
// // var_dump($result);

// class router extends singleton{
//     public $requests = ["showUsers" 
//     => [ "getContoroller","goToshowUsers"]

//     ];

//     protected  function __construct(){
//         echo "😊🌞✌🏻😀";
               
//     }

//     public function getContoroller(){
//         return $userContoroller = userContoroller :: makeObject();
//     }
   
//     public function loadRouter($requests){
//         foreach($this -> requests as $key => $request ){
//             if(array_key_exists($requests[0],$this ->requests)){
//                 $a = $request[0];
//                 $contoroller = $this ->$a(); 
//                 $method =$request[1];
//                 $contoroller->$method();
//             }
//         }
//     }
    

    // public function loadRouter($requests,$data = null){
        
    //     echo $requests;
        // $result = match (expression) {
        //      => ,
        //      => ,
        // }
            
            
        // $endRequest = (int) $requests[0];
        // if($endRequest){
        //     $this ->userContoroller ->goId($endRequest);
        //     if($requests[1] == "editeUserForm"){
        //         $this -> userContoroller -> goToEdidUserForm();
        //     }
        //     if($requests[1] == "deleteUser"){
        //         $this -> userContoroller -> goToDeletUser();
        //     }
        // }
        // if($requests[0] == ""){
        //     $this ->userContoroller ->goToHome();
        // }
      
        // if($requests[0] == "showUsers"){
        //     $this ->userContoroller ->goToshowUsers();
        // }
        // if($requests[0] == "userForm"){
        //     $this ->userContoroller ->goToUserForm ();
           
        // }
        // if($requests[0] == "insertForm"){
        //     $this ->userContoroller ->goToInsert ("insertForm",$data);
            
        // }
        // if($requests[0] == "updatadUser"){
        //     $this ->userContoroller ->goToUpdata ($data);
        // }
       




        // if($requests[0] == "showUsers" || $requests[0] == "userForm" || $requests[0] == "editeUserForm"){
        //     $this ->userContoroller ->goToView($requests);
        // }
        //    print_r($request);
        //  if($request == "showUsers"){
        //        self :: $userContoroller ->sendToView();
        //  }
        //  if($request == "request.php"){
        //         print_r($data);
        //         self :: $userContoroller ->sendToModelUser($data);      
        //  }
    // } 
    // $a = router :: getObject();  
    // var_dump($a);

// }
// router :: $userContoroller = $userContoroller;

// function helper($request){
//     $request -> requests();
// }
// helper($reques










// $router = new router($modelUser,$userContoroller,$loadView);
// $router ->setName("showUsers");
// $router ->analiz();





//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    // echo "perfect";
    // include("model/dbConnection.php");
    // include("model/modelUser.php");
    // // include("view/showUsers.php");
    // include("contoroll/userContoroller.php");
    //  include("view/loadView.php");
    // class router{
    //     public $name;
    //     public $modelUser;
    //     public $loadView;
    //     public $userContoroller;
    //     public $data ;
    //     public function __construct($modelUser,$userContoroller,$loadView){
    //         $this ->modelUser=$modelUser;
    //         $this ->loadView=$loadView;
    //         $this ->userContoroller=$userContoroller;
    //         // var_dump( $this ->userContoroller);
    //     }
    //     // public static function request(string $request ,array $array){
    //     //         if($request =="showUsers"){
    //     //             $contoroller = $array[0];
    //     //             $methodContoroller = $array[1];
    //     //         }
    //     // }
    //     public function setName(string $name){
    //         $this -> name = $name;
    //     }
    //     // public function setData($data){
    //     //     $this -> data = $data;
    //     // }
    //     public function analiz(){
    //         if($this -> name =="showUsers"){
    //             $data=$this->userContoroller->getSeLectFromModel();
    //             $this ->loadView ->index("view/showUsers.php",$data);
    //         }
    //         if($this -> name =="analizeFile"){
                
    //             $this->userContoroller->sendToModelUser($this ->data);
    //             // $this -> loadView -> index("view/userForm.php");
    //         }
    //     }
    //     // public function handle(){
    //     //     $data=$this -> analiz();
    //     //     loadView :: loadView("showUser.php",$data);
    //     // }
    // }
    // // $router = new router($modelUser,$userContoroller,$loadView);
    // // $router ->setName("showUsers");
    // // $router ->analiz();
?>