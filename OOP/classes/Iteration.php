<?php
include("../header.php");

class person{
    
    public $name="nuruddin mehedi";
    public $age=46;
    public $university="barishal university";
    private $email="nuruddinmehedi@gmail.com";
    protected $password ="haj2jfbs2jfj";
     function lteration(){
         foreach($this as $key =>$value)
{
    echo "<br>$key =>$value";
}
         
     }
    
}
 $class= new person;
$class->lteration();

include("../footer.php");

?>