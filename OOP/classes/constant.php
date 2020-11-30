<?php
include("../header.php");

class student {
    
    const DETAIL= "name is nuruddin mehedi age is 18 and live in barishal study at barishal university.";
        function det(){
       echo "<h1>this is detail</h1>".student::DETAIL;
       echo student::DETAIL;
       echo student::DETAIL;
       echo student::DETAIL;
       echo student::DETAIL;
       echo student::DETAIL;
       echo student::DETAIL;
    }
}
$class= new student;
$class-> det();
include("../footer.php");
?>