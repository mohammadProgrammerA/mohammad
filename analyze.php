<?php

    interface analyzeInterface{}

    //!کلاس آنالایز باید ماژولار باشد تا در جای دیگر استفاده شود 

    class analyze implements analyzeInterface{
        public $templets=[];
        public $removeKey=[];


        public function makeRouteListObject(){
            container::bind("routerListInterface","routerList");
            return  container::singleton("routerListInterface");
        }
        public function getRouteList(){
            return $this -> makeRouteListObject() ->getRoute();
        }
        public function analyze($request){
            $requestArray = explode("/",$request);
      

            foreach($this -> getRouteList() as $key => $route){
                $routeListArray = explode("/",$key);
                if(count($routeListArray) == count($requestArray)){
                   $this -> templets[$key] = $key;
                        $result = $this -> getTemplateAndId($routeListArray,$requestArray,$key);
                    //    var_dump($result);
                        if($result){
                            $route = $this ->getRouteList()[$result[0]];
                            
                            return [$route,$result[0],$result[1]];
                        }  
                }
            }
        }

        public function getTemplateAndId($routeListArray,$requestArray,$key){
            
            $result = $this ->checkFalse($routeListArray,$requestArray);
            if(!$result){
                $this ->removeKey [$key] = $key;
            }

            foreach($this -> templets as $key => $value){
                if(!isset($this ->  [$key])){
                    $id = $this -> getId($routeListArray,$requestArray,$result);
                    if(count($this -> templets) - count($this -> removeKey) ==1){
                        return [$key,$id];
                    }
                }
            }
        }

        public function checkFalse($routeList,$request){
            $number = 0;
            $errors=[];
            for($i = 0 ;$i<count($routeList);$i++){
                if($routeList[$i] === $request[$i]){
                    $number +=1; 
                }else{
                   
                    $routeListId = explode("-",$routeList[$i]);
                    $requestId = explode("-",$request[$i]);
                    $requestId = "{" . $requestId[0];
                    if($routeList[$i] !="{id}"){
                        if($routeListId[0] === $requestId){  /* post-id برای اینکه آیدی متناسب با اندیس قبلی شود مثلا */ 
                            $m = "{" . $request[$i-1] . '-'.'id' . "}";
                            $errors [$m] = $routeList[$i];
                        }
                    }
                    if($routeList[$i] === "{id}"){
                        $number +=1;
                    }
                }
            }
            foreach($errors as $key=>$error){
                if($key ==$error){
                    $number +=1;
                }
            }
            if($number === count($request)){
                return $i;
            }else{
                return false;
            }  
        }
        public function getId($routeList,$request,$i){
            $id=[];
            for($i=0;$i<count($routeList);$i++){
                if($routeList[$i] !=$request[$i]){
                    $x = strpos($routeList[$i] ,"{");
                    $y = strpos($routeList[$i] ,"}");
                    $key = substr($routeList[$i] , 1,$y-1);
                    $id [$key] = $request[$i];
                }
            }
            return $id;
        }
    }
      

           

?>