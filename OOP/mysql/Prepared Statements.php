<?php
include("../header.php");
$sqlconnection = new mysqli("localhost","root","","test");

if($sqlconnection->connect_error){

    echo"connection faild";
    exit();
}
else{
    echo"connection successful....";
}

$data="insert into nur_tab(name,age,id,skill) value(?,?,?,?)";
$stmt=$sqlconnection->prepare($data);
$stmt->bind_param("siis",$name,$age,$id,$skill);

    $name="mahabub";
    $age=67;
    $id=6;
    $skill="rubby";
$stmt->execute();
    /*
$data1= "select name,id,skill from nur_tab order by id";
$result= $sqlconnection->prepare($data1);

$result->bind_result($name, $id, $skill);
$result->execute();
while($result->fetch()){
    echo "$id <br> $skill <br> $name <br>";
}

*/
    include("../footer.php");


?>