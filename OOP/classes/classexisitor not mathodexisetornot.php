<?php
include("../header.php");

class my {
    function m(){
        echo"function is exisit";
    }
}
$new= new my;
if(class_exists("my")){
echo"yes it is!";
}
else{
    echo "tor dorkar ase";
}
if(method_exists($new,"m")){
echo "mehod is exist";
}
include("../footer.php");
?>