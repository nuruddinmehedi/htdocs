<?php
include("../header.php");
class php{
    function myphp(){
        echo"i love php<br>";
        return $this;
    }
    function java(){
        echo"i love php";
        return $this;
    }
}

$class= new php;
$class->myphp()->java();

include("../footer.php");

?>