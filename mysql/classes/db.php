<?php
include 'config.php';

 class db{
     
     public $host= HOST_NAME;
     public $user= USER_NAME;
     public $pass=DB_PASS;
     public $bdname=DB_NAME;
     
     public $link;
     public $error;
     
     public function __construct(){
         
         $this->connectdb();
     }
     
     private function connectdb(){
         
      $this->link  = new mysqli($this->host,$this->user,$this->pass,$this->bdname);
         
       if(!$this->link) {
           
           echo "faild to connect". $this->link->connect_error ;
           return false;
       } 
         
     }
    
     public function select($qur){
         
         $result=$this->link->query($qur) or die($this->link->error.__LINE__);
         if($result->num_rows>0){
             
             return $result;
             
         } else{
             return false;
         }
         
     }
   
     
 public function insert($que){
     
     
    $result=$this->link->query($que) or die($this->link->error.__LINE__);
     if($result){
         
         header("Location: index.php?msg=".urlencode('insert successfull....'));
         exit();
     }
     else{
         die("Error (".$this->link->errno.")".$this->link->error);
     }
     
 }     
     
 }


?>