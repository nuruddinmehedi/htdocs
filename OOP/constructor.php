<?php
include("../header.php");
class constractor{
    public $name="nuruddin mehedi";
    public $instatution="barishal university";
    public $subject="law";
    
    function __construct(){
      echo"student name:".$this->name."<br> student inistatution:".$this->instatution."<br> student subject:".$this->subject;}
    function my (){
        
         echo"student name:".$this->name."<br> student inistatution:".$this->instatution."<br> student subject:".$this->subject;}

    }

$class= new constractor;
$class->my ();

include ("../footer.php")
?>