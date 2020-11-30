<?php
include("../header.php");


/*
class rozi{
   function detail(array $a){
      foreach($a as $value){
             echo $value[0].":".$value[1]*$value[2]."<br>";
          
          
      }
    }
    
}

$class= new rozi;
$ar= array(
array('one number',12,23),
array('one number',11,24));
$class->detail($ar);
*/
class hinting{
    function hf(){
         echo"i am hf ";
    }
    function hfs(){
        echo"i am hfs ";
    }
}

class shinting{
    public $from;
    function __construct(hinting $val){
        $this->from=$val;
        $this->from->hf();
         $this->from->hfs();
    }
}

$class= new shinting(new hinting);

include("../footer.php");
?>