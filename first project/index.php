<?php include "inc/header.php"; 
spl_autoload_register(function($class){
    
    include "classes/".$class.".php"; 
    
});
?>
<?php
  $user= new student;

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $dep= $_POST['dep'];
    $age= $_POST['age'];
    
  
$user-> name($name);
$user-> dep($dep);
$user-> age($age);
 if($user->insert()){
  $insert="inserted successfully....";
}
else{ 
    $insert="filled to insert";
}   
    
}

if(isset($_POST['update'])){
    $name= $_POST['name'];
    $dep= $_POST['dep'];
    $age= $_POST['age'];
    $id= $_POST['id'];
    
  
$user-> name($name);
$user-> dep($dep);
$user-> age($age);
 if($user->update($id)){
  $insert="update successfully....";
}
else{ 
    $insert="filled to update";
}   
    
}


?>
<?php 
if(isset($_GET['action'])&& $_GET['action']=='delate'){
    
    $id= (int)$_GET['id'];
    if($user->delate($id)){
  $insert="delate successfully....";
}
else{ 
    $insert="filled to delate";
}   
    
}
?>
<?php

if(isset($_GET['action'])&& $_GET['action']== 'edite'){
    
    $id= (int)$_GET['id'];
    $result= $user->readById($id); 


?>

<section class="mainleft">
<form action="" method="post">
 <table>
   <input type="hidden" value="<?php echo $result['ID'];?> " name="id" />
    <tr>
        <td>Name: </td>
        <td><input type="text" value="<?php echo $result['Name'];?> "name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text"value="<?php echo $result['Department'];?> " name="dep" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text"value="<?php echo $result['Age'];?> " name="age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="update" value="update"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
   
  </table>
   <span class="insert"><?php if (!empty($insert)){ echo $insert;
} ?></span>
</form>
</section>
<?php } else { ?>
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
   <span class="insert"><?php if (!empty($insert)){ echo $insert;
} ?></span>
</form>
</section>
<?php }?>

<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
<?php $i=0;
      foreach ($user->readAll() as $key=>$value){
           $i++;
      ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $value['Name'];?></td>
        <td><?php echo $value['Department'];?></td>
        <td><?php echo $value['Age'];?></td>
        <td>
            <?php echo "<a href='index.php?action=edite&id=".$value['ID']."'>Edit</a>";?> || <?php echo "<a onclick='return confirm(\"are you sure to delet data\")' href='index.php?action=delate&id=".$value['ID']." '>Delate</a>";?>
        </td>
    </tr>

   <?php } ?>
  </table>
</section>


<?php include "inc/footer.php"; ?>