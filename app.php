<?php
/*استارت برنامه + کار اضافه*/
/* یا به صورت استاتیگ متد را کال کنم تایپ هندینگ ؟ یا از آبجکت سینگل استفاده کنم؟ */

interface appInterface{
    public static function startApplacation();
}


class app implements appInterface{
    public function __construct(){}
    private static function makeRequest(){
        container :: bind("requestInterface" , request :: class);
        return container :: singleton("requestInterface");
    }
    private static function makeRouter(){
        container :: bind("ruoterInterface" , router :: class);
        return container :: singleton("ruoterInterface");
    }
    public static function startApplacation(){
        $request = self :: makeRequest();
        $router = self :: makeRouter();
        $router ->post($request->requests());
    }
    
}
































// class app {
//     public $r;
//     public function __construct(){
//     }
//     public function setDependency(request $request ){
//         // var_dump($request);
//         // var_dump($router);
//     }





    // private function makeObjectRequest(){
    //     $request = applacation::makeObjectRequest("request");
    //     return $request;
        
    // }
    // private function objectRouter($router){
        
        
        
    // }
    // private function objectContoroller(){
    //     $contoroller = applacation::makeObjectContoroller("userContoroller");
    //     return $contoroller;
        
    // }
    // public function render($request){
        
        // $request= $this -> makeObjectRequest();
        // $router = $this -> makeObjectRouter();
        // $contoroller = $this->makeObjectContoroller();
        // // $router->setContorller($contoroller);
        // $request->handle($router,$contoroller );
        // $request -> test();
    // }




























// $r = request::makeObject();
// $request = $r();
// app:: makeObjectRequest($request);



// $app = app :: getObject();
// $router = router :: getObject();
// $request = request :: getObject(); 
// app :: ertebat($request , $router); 





// class app extends singleton{
//     // protected  function __construct(){}
//     public static function ertebat(){
//         // echo "this is a app";
//         $router = router :: getObject();
//         $request = request :: getObject(); 
//         // $requests = $request -> requests();
//         /* برای اینکه خواستم روترخودش ریکویست را بگیرد*/
//         $router -> loadRouter($request);
//     }
// }
// // $app = app :: getObject();
// app :: ertebat(); 























    // $router = router :: getObject();
    // $request = request :: getObject();  

   
    // class app extends singleton{
        

    //     protected  function __construct(){
    //         // $this ->makeObjects();
    //         // $this ->sendRequestToRouter();
    //         echo "this is a vaset Class 😫😫😑😋";
    //         // $this -> instanceof();
    //     }
    //     // public function makeObjects(){
    //     //     $this -> router = new router();
    //     //     $this -> request = new request();
    //     // }
    //     // public function instanceof(){
            
    //     //     $result = $this -> instanceof;
    //     //     var_dump($result );
    //     //     // return $this -> request ->requests();
    //     // }
    //     public function sendRequestToRouter(){
    //     //     if($post = $this -> request ->getPost()){
    //     //         $this -> post = $post;
    //     //     }
    //     // $this->setRequest()
    //         $this -> router->loadRouter($this ->setRequest());
    //     }
    //     public function getRouter($router){
    //         return $router;
    //     }
     
    // }
    // $app = app :: getObject(); 
    // $app -> getRouter($router); 
    
?>