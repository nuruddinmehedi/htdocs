<?php
      include("../header.php");
class java{
    private $catagory;
    private $fremwork;
    
    public function setcat($a){
       $this->catagory= $a;
    }
      public function getcat(){
       return $this->catagory."<br>";
    }
    public function setfremwork($b){
       $this->fremwork= $b;
    }
      public function getfremwork(){
       return $this->fremwork."<br>";
    }
    public function __clone(){
        $len= new java;
        $len->setcat($this->catagory);
        $len->setfremwork($this->fremwork);
        return $len;
        
    }
}

$cphp= new java;
 $cphp->setcat("html");
$cphp->setfremwork("css");
echo $cphp->getcat();
echo $cphp->getfremwork();



$java= clone $cphp;
 $java->setcat("php");
 $java->setfremwork("java");
echo $java->getcat();
echo $java->getfremwork();

echo $cphp->getcat();
echo $cphp->getfremwork();
 include("../footer.php");
?>