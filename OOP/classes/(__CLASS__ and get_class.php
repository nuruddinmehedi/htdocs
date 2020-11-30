<?php
include("../header.php");

abstract class php{
    function phpf(){
        echo "this is php mainphp->".__CLASS__."<br>";
        echo "this is php mainphp->".get_class($this)."<br>";
    }
    
}
class ext extends php{

function ephpf(){
        echo "this is php main>childphp->".__CLASS__."<br>";
        echo "this is php main>childphp->".get_class($this)."<br>";
    }
}
$class= new ext;
$class-> phpf();
$class-> ephpf();

include("../footer.php");



?>