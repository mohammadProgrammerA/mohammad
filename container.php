<?php




interface containerInterface{
    public static function bind($className,$dependency);
} 

class container extends factoryAndSingleton implements containerInterface{
    public static $closers= [];
    private function __clone(){}
    
    public static function bind($abstraction , $className){
        // if($bool){
        //     $clouser = self :: getClouserSingle($className);
        //     self :: $closers [$abstract]=$clouser;
        // }else{
            $clouser = self :: getClouser($className);
            self :: $closers [$abstraction]=$clouser; 
        // }
    }

    public static function getClouser($className){
        return function ($bool) use ($className) {return factoryAndSingleton::instance($className,$bool);};
    }

    //! public static function getClouserSingle($className){
    //!    return function () use ($className) {return factoryAndSingleton::instance($className,true);};
    //!}
   
    public static function resolve($abstraction,$bool = false){

        if(isset(self :: $closers [$abstraction])){
            $object= self :: $closers [$abstraction]($bool);
            return $object;
        }
//-----------------------------------------------------------------------------------------------           
        // }elseif($bool){
        //     /*   نکردیم  bind می خواهیم و abstraction   برای زمانی که آبجکت بدون */
        //     self::bind($abstraction,$abstraction , true);
        //     $object= self :: $closers [$abstraction]($bool);
        //     return $object;
        // }else{
        //     self::bind($abstraction,$abstraction);
        //     $object= self :: $closers [$abstraction]($bool);
        //     return $object;
        // }
//------------------------------------------------------------------------------------------------

    }
    public static function singleton($abstraction){
        return self::resolve($abstraction,true);
    }

}





//!legesi kode 

// interface containerInterface{
//     public static function bind($className,$dependency);
// } 

// class container extends factoryAndSingleton implements containerInterface{
//     public static $closers= [];
//     private function __clone(){}
    
//     public static function bind($abstract , $className,$bool = false){
//         if($bool){
//             $clouser = self :: getClouserSingle($className);
//             self :: $closers [$abstract]=$clouser;
//         }else{
//             $clouser = self :: getClouser($className);
//             self :: $closers [$abstract]=$clouser; 
//         }
//     }

//     public static function getClouser($abstraction){
//         return function () use ($abstraction) {return factoryAndSingleton::instance($abstraction);};
//     }
//     public static function getClouserSingle($abstraction){
//         return function () use ($abstraction) {return factoryAndSingleton::instance($abstraction,true);};
//     }
   
//     public static function resolve($abstraction,$bool = false){

//         if(isset(self :: $closers [$abstraction])){
//             $object= self :: $closers [$abstraction]();
//             return $object;
//         }elseif($bool){
//             /*   نکردیم  bind می خواهیم و abstraction   برای زمانی که آبجکت بدون */
//             self::bind($abstraction,$abstraction , true);
//             $object= self :: $closers [$abstraction]();
//             return $object;
//         }else{
//             self::bind($abstraction,$abstraction);
//             $object= self :: $closers [$abstraction]();
//             return $object;
//         }
    
//     }
//     public static function singleton($abstraction){
//         return self::resolve($abstraction,true);
//     }

// }

// /*برای آبجکت ها مشخص شده است dependency injection  از قبل */

// container :: bind("app" , ["request" ]);
// container :: bind("request" , ["router"]);
// container :: bind("router" , ["userContoroller"]);
// container :: bind("userContoroller" , ["modelUser"]);






























// interface containerInterface{
//     public static function bind($className,$dependency);
// } 

// class container extends factoryAndSingleton implements containerInterface{

//     public static $closers= [];
//     public static $dependency=[];
    
//     function __construct(){}
//     private function __clone(){}
    
//     public static function bind($className,$dependency=null){

//         $clouser = self :: getclouser($className);
//         self :: $closers [$className]=$clouser; 

//         if($dependency){
//             self :: $dependency [$className] = $dependency;
        
//         for($i = 0 ; $i < count($dependency);$i++){
//             $clouser = self :: getclouser($dependency[$i]);
//                 self :: $closers [$dependency[$i]]=$clouser;
//             }
//         }
//     }

//     public static function getClouser($clouser){
       
//         return function () use ($clouser) {return factoryAndSingleton::instance($clouser);};
//     }

//     public static function getDependency($object,$className){
//         if(isset(self :: $dependency [$className])){
//             $dependencyArray = self::$dependency[$className];
//             $objects=[];
//             if(count($dependencyArray)>0){
//                 for($i=0;$i<count($dependencyArray);$i++){
//                     $objects[] = self :: singleton($dependencyArray[$i]);
//                 }
//                 if(count($objects) == 2 ){
//                     return $object->setDependency($objects[0],$objects[1]);
//                 }
          
//                 if(count($objects) == 1 ){
//                     return $object->setDependency($objects[0]);
//                 }
//             }
//         }
//     }
   
//     public static function resolve($className){
//         //  extract();
//         if(isset(self :: $closers [$className])){
//             $object= self :: $closers [$className]();
           
//             $result = self::getDependency($object,$className);
           
//              return $object;
//     }else{
//         /*   نکردیم  bind می خواهیم و dependencyInjection  برای زمانی که آبجکت بدون */
//         self::bind($className);
//         $object= self :: $closers [$className]();
//         return $object;
//     }
    
// }

// public static function singleton($className){
//     /*single object*/
//     factoryAndSingleton ::setNameInstance($className);
//     return self::resolve($className);
// }
// }
// /*برای آبجکت ها مشخص شده است dependency injection  از قبل */

// container :: bind("app" , ["request" ]);
// container :: bind("request" , ["router"]);
// container :: bind("router" , ["userContoroller"]);
// container :: bind("userContoroller" , ["modelUser"]);


























































































// interface containerInterface{
//     public static function bind($className,$dependency);
// } 

// class container extends factoryAndSingleton implements containerInterface{

//     public static $closers= [];
//     public static $dependency=[];
    
//     function __construct(){}
//     private function __clone(){}
    
//     public static function bind($className,$dependency){
//         self :: $dependency [$className] = $dependency;
//         $clouser = self :: getclouser($className);
//         self :: $closers [$className]=$clouser; 
//         for($i = 0 ; $i < count($dependency);$i++){
//             $clouser = self :: getclouser($dependency[$i]);
//             self :: $closers [$dependency[$i]]=$clouser;
//         }
//         // var_dump(self :: $dependency);
//         // for($i = 0 ; $i < count($dependency);$i++){
//             // echo $dependency[$i]."</br>";
//             // if(array_key_exists($dependency[0] , self::$dependency)){
//                 // for($j=0;$j < count(self::$dependency);$j++){
//                 //     if($dependency[$i]==){}
//                 // }
//             // if(isset( self::$dependency[$dependency[0] ])){
//             //     echo "🚨";
//             // }
//         // }
//         // if(){}
//         // $cluser = self :: getcluser($className,$dependency);
//         // $closur = self::getClouser($className);
//         // $dependArray=[];
//         // foreach($depnedency as $depend){
//         //     $dependArray[]=self::getClouser($depend);
//         // }
//         // // $closur = self::getClouser($depnedency);
//         // self :: $instanceDependency [$className] = $closur;
//     }
//     public static function getClouser($clouser){
//         return function () use ($clouser) {return factoryAndSingleton::instance($clouser);};
       
//         // if(count($depnedency) == 3){
//         //     return function () use ($depnedency) {factoryAndSingleton::instance($depnedency[0])->setDependency(factoryAndSingleton::instance($depnedency[1]) , (factoryAndSingleton::instance($depnedency[2])));};
//         // }


//         // public function operation(){
//                 //     $result=[];
//                 //     self :: $instanceDependency [$className];
//                 //     foreach($this ->childern as $child){
//                 //         // $result[]=$child -> operation();

//                 //     }
//                 //     return "Branch (".implode ("+",$result).")";
//                 // }



//         // if(count($depnedency) == 2){
//         //     return function () use ($depnedency) {
//         //         $object;
//         //         for($i =0 ;$i<count($depnedency);$i++){
//         //             $object = 
//         //         }
//         //         return  factoryAndSingleton::instance($depnedency[0])->setDependency(self :: resolve("request"));};
//         // }






//         // if(count($depnedency) == 1){
//             // return function () use ($depnedency) {return new $depnedency[0];};
           
//         // }


//     }

//     public static function getDependency($className){
//         if(isset(self :: $dependency [$className])){
//             $arr = self::$dependency[$className];
//             // print_r($arr);
//             // echo "<br>"
//             // $o=[];
//             $objects=[];
//             if(count($arr)>0){
//                 for($i=0;$i<count($arr);$i++){
//                     // $subObject = self :: $closers [$arr[$i]]();
//                     // var_dump($subObject);
//                     // var_dump($object);
//                     $objects []= self :: resolve($arr[$i]);
                    
//                 //    self:: $objects[]=$object;
//                 //     var_dump(self:: $objects);
                    
//                 //     echo "<br>";
//                     // $o[]=$object;
//                     // $object ->setDependency(self :: $objects[]);
//                     // unset($object[0]); 
//                     return $objects;
//                 }
       
//                 // $object[0] ->setDependency($o[0]);
//                 // var_dump($objects);
//                 // var_dump($o);
//                 // echo "</br>";
                 
//                 // return $objects;
//             }
//             // print_r(self :: $dependency);
//     }
// // }
// // public static function getO($className){
// //     $a = self :: resolve($className);
// //     // var_dump($a);
// //     echo "</br>";
// //     // $a =[];
// //     // for($i = 0;$i<count($arr)){

// //     // }
// //     var_dump(self :: $objects);
//  }
   
//     public static function resolve($className){
    
//         // $o=self::getDependency($className);
//         // var_dump($o);
        
//          echo "</br>";
//         // var_dump(self:: $objects);
//         if(isset(self :: $closers [$className])){
//             // echo $className. "☺☺";

//             $b= $object= self :: $closers [$className]();
//             // $o;
//             // for($i=0;$i<count($d);$i++){
//             //     $o .=$d[$i];
//             //     $d .=",";
//             // }
//             $n =self::getDependency($className);
//             // var_dump($n);
//             print_r($n);
//             echo "<br>";
//             // $b -> setDependency($n);
//             // if(count($n) > 0){

//             //     foreach($n as $key=>$k){
    
//             //         $b -> setDependency($k);
//             //     }
//             // }
//             // var_dump($b);
//             return $b;
        
            
//             // $object -> setDependency()-> (self :: $closers [self::$dependency[$className]]());
            
        
//         // }else{
//         //     /*   ندارداجرا میشود dependency injection برای زمانی که آبجکت  */

//         //     self :: bind($className ,[$className]);
//         //     return self :: $closers [$className]();
//         // }

//     }
    
//        // public static function getClouser($depnedency){
//     //     if(count($depnedency) == 3){
    //         return function () use ($depnedency) {factoryAndSingleton::instance($depnedency[0])->setDependency(factoryAndSingleton::instance($depnedency[1]) , (factoryAndSingleton::instance($depnedency[2])));};
//     //     }


//     //     if(count($depnedency) == 2){
//     //         return function () use ($depnedency) { factoryAndSingleton::instance($depnedency[0])->setDependency(factoryAndSingleton::instance($depnedency[1]));};
//     //     }


//     //     if(count($depnedency) == 1){
//     //         // return function () use ($depnedency) {return new $depnedency[0];};
//     //         return function () use ($depnedency) {return factoryAndSingleton::instance($depnedency[0]);};
//     //     }


//     // }
// }

// public static function singleton($className){
//     /*single object*/
//     factoryAndSingleton :: $nameInstance[$className] = $className;
//     return self::resolve($className);
// }
// }
// /*برای آبجکت ها مشخص شده است dependency injection  از قبل */

// container :: bind("app" , ["request" ,"router"]);
// container :: bind("request" , ["router"]);
// container :: bind("router" , ["userContoroller"]);
// container :: bind("dependency" , ["dependency","test"]);
// container :: bind("app" , ["app","request"]);
// container :: bind("request" , ["request","router"]);

?>