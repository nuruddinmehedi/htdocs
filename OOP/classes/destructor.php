<?php
include("../header.php");
class student{
    public $name="nuruddin mehedi";
    public $instatution="barishal university";
    public $subject="law";
    public $id=12;

    function __construct(){
        echo"student name:".$this->name."<br> student inistatution:".$this->instatution."<br> student subject:".$this->subject;}
    function setid($a){

        echo $this->id=$a;
    }
    function __destruct(){
        if(!empty($this->id)){
            echo "exsist the person";
        }
        else{
            echo "not exsist the person";

        }
    }

}


$class= new student;
$class->setid(23);
unset($class);

include("../footer.php");
?>