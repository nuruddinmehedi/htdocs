<?php include "inc/header.php";
include "classes/db.php"; 
?>
<?php  
$db=new db;
$qur="select * from student__tab";
$read=$db->select($qur);


?>

<?php 
if (isset($_POST['delete'])){
       $id=$_GET['id'];
    $que="delete from student__tab where id=$id";
     $db->insert($que);
}
?>
<?php
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($db->link ,$_POST['name']);
$dep=mysqli_real_escape_string($db->link ,$_POST['dep']);
$age=mysqli_real_escape_string($db->link ,$_POST['age']);
if($name=='' ||$dep=='' ||$age==''){
    
    $error="fild must not be empty";
}
    else {
        $que="insert into student__tab(Name,Department,Age) values('$name','$dep','$age')";
        $db->insert($que);
    }

}
?>
<?php
if (isset($_GET['msg'])){
    
    echo $_GET['msg'];
}
?>
<?php
if (isset($error)){
    
    echo $error;
}
?>

<?php 
if (isset($_GET['action']) && $_GET['action']== 'edite' ){
    
    if(isset($_POST['update'])){
$name=mysqli_real_escape_string($db->link ,$_POST['name']);
$dep=mysqli_real_escape_string($db->link ,$_POST['dep']);
$age=mysqli_real_escape_string($db->link ,$_POST['age']);
if($name=='' ||$dep=='' ||$age==''){
    
    $error="fild must not be empty";
}
    else {
        
        $id=$_GET['id'];
        $que="update student__tab set 
        
        Name='$name',
        Department='$dep',
        Age='$age' 
        where id=$id
        ";
        
        $db->insert($que);
    }

}
    
    

?>


<section class="mainleft">
<form action="" method="post">
 <table>
   <?php if(isset($_GET['id'])){
        $id=$_GET['id'];
        $qur="select * from student__tab where id=$id ";
        $result=$db->select($qur);
         $smtm=$result->fetch_assoc();
    ?>
    <tr>
        <td>Name: </td>
        <td><input type="text" value="<?php echo  $smtm['Name'];?>"name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" value="<?php echo  $smtm['Department'];?>" name="dep" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" value="<?php echo  $smtm['Age'];?>" name="age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit"  name="update" value="update"/>
        <input type="submit"  name="delete" value="delete"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
   <?php }?>
  </table>
   <span class="insert"></span>
</form>
</section>
<?php  } else { ?>

<section class="mainleft">
<form action="" method="post">
 <table>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dep" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit"  name="submit" value="Submit"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
   
  </table>
   <span class="insert"></span>
</form>
</section>
<?php } ?>
<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
<?php
       $i=0;
      while($row=$read->fetch_assoc()){
    $i++;
    
 ?>
    <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Department'];?></td>
        <td><?php echo $row['Age'];?></td>
         <td><a href="index.php?action=edite&id=<?php echo $row['ID']; ?>">Edite</a> </td>
    </tr>
    <?php }   ?> 
  </table>

</section>


<?php include "inc/footer.php"; ?>