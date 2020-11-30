<?php
include("../header.php");
trait java{
    
    function javaf(){
        
        echo "i love java <br>";
    }
}
trait php{
    
    function phpf(){
        
        echo "i love php<br>";
    }
}

trait javaphp{
    
    use java;
    use php;
}
class javaphpc{
    use javaphp;
    

}
$class= new javaphpc;
$class-> phpf();
$class-> javaf();

include("../footer.php");
?>