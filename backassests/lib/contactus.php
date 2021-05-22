<?php
class contactus{
    private function connection(){
         return mysqli_connect("localhost","root","","mytask");
    }
     public function signup($name,$email,$password){
       $query="INSERT INTO `assissants`(`name`,`email`,`password`) VALUES ('$name','$email','$password')" ;
       mysqli_query($this->connection(),$query);
    if(mysqli_affected_rows($this->connection()) ==1){
        return true;
    }else{
        return false;
    }
    }
    public function login($email,$password){
        $sql="SELECT * FROM `assissants` WHERE `email` = '$email' && `password`='$password'";
      $q=  mysqli_query($this->connection(),$sql);
       $res= mysqli_fetch_assoc($q);
     return $res;
    }   
}
$object1 = new contactus();
?>
