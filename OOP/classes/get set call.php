<?php
include("../header.php");

class get{
    
  
    function __get($a){
       echo  $a."<br>";
    }
    function __set($a,$value){
       echo" this is set $a->$value ";
}
    function __call($b,$value){
        echo "<br>it is $b and argument is  ".implode(" ,",$value);
    }
}
$class= new get;
$class->nuruddin;
$class->name="jadgjdgc";
$class->callfunction(21,21,134,15);
include("../footer.php");
?>