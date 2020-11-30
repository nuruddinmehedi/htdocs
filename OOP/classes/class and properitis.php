<?php
      include("../header.php");
class student{
    public $name="nuruddin mehedi";
    public $instatution="barishal university";
    public $subject="law";
    
    function detail(){
        
        echo"student name:".$this->name."<br> student inistatution:".$this->instatution."<br> student subject:".$this->subject;
    }
    
}

$student= new student;
$student->detail();

 include("../footer.php");
?>