<?php
include("../header.php");

$arr= array("css","html","java","php");
$arryc= new arrayobject($arr);
$iterators=$arryc-> getIterator();
while($iterators->valid()){
    echo $iterators->current()."<br>";
    $iterators->next();
}

include("../footer.php");
?>