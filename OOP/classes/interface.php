<?php
include("../header.php");
interface student{
    function kamal();
}
class kamal implements student{
    function __construct(){
        $this->kamal();
    }
      function kamal(){
          echo"this is interface";
      }
}

$class= new kamal;

include("../footer.php");

?>