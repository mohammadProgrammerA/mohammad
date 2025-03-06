<?php
    interface routerListInterface{

    }
    class routerList implements routerListInterface {
        private $routeListArray =  [
            "/" => ["userContoroller", "goToHome"],
            "/routerDynamic/view/showUsers"=> ['userContoroller','goToshowUsers'],
            "/routerDynamic/"=> ['userContoroller','goToHome'],
            "/routerDynamic/request/updatadUser"=> ['userContoroller','goToUpdataUser'],
            "/routerDynamic/request/testOlyafam/{testOlyafam-id}/h/{id}/u/{u-id}"=> ['userContoroller','goToUpdataUser',"oly"],
            
            
            
            




            
            
            
            "/routerDynamic/lskdjf"=> ['userContoroller','goToHome'],
            "/routerDynamic/view/userForm1"=> ['userContoroller','goToUserForm','form1'],
            "/routerDynamic/view/userForm2"=> ['userContoroller','goToUserForm','form2'],
            "/routerDynamic/view/userForm"=> ['userContoroller','goToUserForm','form'],
            "/routerDynamic/request/saveData"=> ['userContoroller','goToInsert'],
            "/routerDynamic/view/editeUserForm/{id}"=> ['userContoroller',"goToEdidUserForm"],
            "/routerDynamic/view/deleteUser/{id}"=> ['userContoroller','goToDeletUser'],
            
            "/routerDynamic/view/delet/{id}"=> ['userContoroller','goToDeletUseriddd'],
            "/routerDynamic/{id}/updatadUser"=> ['userContoroller','goToUpdataUser',"nnnn"],
            "/routerDynamic/user/{user-id}/post/{post-id}"=> ['userContoroller','goToUpdataUser'],


            "/routerDynamic/user/{id}/post/{post-id}/a/{a-id}"=> ['userContoroller','goToUpda'],


            "/routerDynamic/{mohammad-id}/{prouct-id}/user/{id}/post/{post-id}/aaaaa/{aaaaa-id}/category/{category-id}"=> ['userContoroller','goToUpdataUser',"😁ghf✌✌👍👍😂🙌hfgg😁"],
        ];
        public function getRoute(){
            return $this -> routeListArray;
        }
    }
    
    function clientCode(){
        container::bind("routerListInterface","routerList");
        $routerList = container::singleton("routerListInterface");

    }
   
      
 
?>