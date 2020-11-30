<?php
include("modul/modul.php");

class control{
    public $modul;
    public function __construct(){
    $this->modul= new modul;
    
    }
    
    public function home(){
      $user =$this->modul->getdata(); 
        include'view/home.php';
        
    }
}
?>