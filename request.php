<?php

interface requestInterface{
    public function requests();
}
class request implements requestInterface  {
    private $uri;
    private $uriArray;
    private $post;
    private $id;
    public function __construct(){
        $this ->uri = $_SERVER["REQUEST_URI"];
    }
    private function getPost(){
        $this -> post = $_POST;
    }

    // private  function parseUri(){
    //     $this -> uriArray = explode("/",$this ->uri);
    // }

    // private function getUriArray(){
    //     $this -> parseUri();
    //     $array =  $this->uriArray;  
    //     return $array;
    // }
    // public function analize(){
    //     $array = $this ->getUriArray();
      
    //     if(count($array) > 4){
    //         $this -> id = $array[count($array)-1];
    //         // unset($array[4]);
    //     }
    //     // $uri = implode("/",$array);
    //     // return $uri;
    // }

    public function requests(){
        // $this -> analize();
        $this -> getPost();
        return [$this -> uri, $this -> post];





        // $request = $this -> getUriArray();
        // $requestArr=[$request[count($request)-1] , $request[count($request)-2]];
        // return $requestArr;
    } 
    // public function handle(ruoterInterface $router,interfaceUserContoroller $contoroller){
    //     $requests = $this -> requests();
    //     $endRequest = (int) $requests[0];
    //     // echo gettype($endRequest);
        
    //     if($endRequest > 0 ){
    //         $router->post($contoroller,$requests[1],$endRequest);  
    //     }
    //     if($endRequest == 0 ){
    //         echo $requests[0];
    //         $router->post($contoroller,$requests[0],$this->post);
    //     }
    // }
}






























    // class request extends singleton{
    //     public $uri;
    //     private $uriArray;
  
    //     protected  function __construct(){
    //         // echo "this is a request !!!";
    //         $this ->uri = $_SERVER["REQUEST_URI"];
    //         // $this -> instanceof();
    //     }
    //     // public function instanceof(){
            
    //     //     $result = $this -> instanceof;
    //     //     var_dump($result );
    //     //     // return $this -> request ->requests();
    //     // }
    //     // public function test(){
    //     //     echo "this is a test request !!!!!!";
    //     // }

    //     public function parseUri(){
    //         $this -> uriArray = explode("/",$this ->uri);
    //     }

    //     public function getUriArray(){
    //         $this -> parseUri();
    //         $array =  $this->uriArray;
    //         return $array;
    //     }

    //     public function requests(){
    //         $request = $this -> getUriArray();
    //         $requestArr=[$request[count($request)-1] , $request[count($request)-2]];
    //         return $requestArr;
    //     } 

    //     // public function getPost(){
    //     //     if($this -> postData ->getPost()){
    //     //         echo "😊😊😊<br>";
    //     //         print_r($this -> postData ->getPost());
    //     //         return $this -> postData ->getPost();
    //     //         echo "yessssssssssssssssssssssssssssssssssssssssssss😀👏🏻";
    //     //     }
            
    //     // }

    //     // public function getUri(){
    //     //     return $this ->uri;
    //     // }

      
       

    //     // public function test(){
    //     //     echo "🌞🌞🌞";
    //     //     print_r($this -> getPost());
    //     //     echo "🌞🌞😫😊🙂🙂☺😋😋🌞";
    //     // }
    // }
 






    
?>