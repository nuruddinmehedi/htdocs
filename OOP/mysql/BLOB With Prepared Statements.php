<?php
include("../header.php");
$sqlconnection = new mysqli("localhost","root","","my");

if($sqlconnection->connect_error){

    echo"connection faild";
    exit();
}
$data="select img from tab_t where id =?";
$stmt=$sqlconnection->prepare($data);
$stmt->bind_param("i",$id);
$id=100;
$stmt->execute();
$stmt->bind_result($img);
$stmt->fetch();
header("content-type: jpg");
echo '<img src="data:;base64, '.base64_encode($img).'">';
/*
$data="insert into tab_t(img,id) value(?,?)"; 
$stmt=$sqlconnection->prepare($data);
$stmt->bind_param("bi",$img,$id);
$id=100;
$img= file_get_contents("250px.png");
$stmt->send_long_data(0,$img);
$stmt->execute();
*/
    include("../footer.php");


?>