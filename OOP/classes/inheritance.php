<?php
include("../header.php");
class student{
    public $age;
    public $name;

    function my($a,$b){
        $this->age= $a;
        $this->name= $b;
        echo "studebt name: ".$this->name." and age ia: ".$this->age;
    }


}
class boy extends student{
    public $age;
    public $name;

    function my($a,$b){
        $this->age= $a;
        $this->name= $b;
        echo " it is extands studebt name: ".$this->name."and age ia: ".$this->age;
    }

}

$stident= new student;
$stident->my(17,"sokina");
$boy= new boy;
$boy->my(7,"rofik");
include ("../footer.php")
?>