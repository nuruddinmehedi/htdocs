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

/*
$data1= "update nur_tab SET skill='php,jav,c#' where id='1'";
$result= $sqlconnection->query($data1);
 */
$data="select * from tab_t";

$result= $sqlconnection->query($data);

while($data=$result->fetch_object())
{
    echo "<pre>";
    echo $data->img;
    echo "</pre>";
}



include("../footer.php");


?>