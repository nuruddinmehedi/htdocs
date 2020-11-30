<?php
include_once "lib/user.php";
include "inc/header.php";
section::checksession();
?>
   <?php 
$user= new user;



if(isset($_GET['id'])){
    
    $id=$_GET['id'];
    $getid1=$user->getdatabyusingid($id);
    
    if(isset($_POST['update'])){
    $logmsg=$user->userdataupdate($_POST,$id);
    
}
    
    
 foreach($getid1 as $value){
     

?>
   
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <h2>User profile<span class="pull-right"><a href="index.php">Back</a></span></h2>
	        </div>
	        <div class="panel-body">
            <div style="width:600px; margin: 0px auto;">
	            <form action="" method="post">
                 <?php if(!empty($logmsg)){
         echo $logmsg ;
     } ?>
                  <div class="form-group">
	                    <label for="Username">User name</label>
	                    <input type="text" id="Username" name="Username" class="form-control" value="<?php echo $value['username']; ?>">
	                </div>
	                  <div class="form-group">
	                    <label for="Name">Name</label>
	                    <input type="text" value="<?php echo $value['name']; ?>" id="Name" name="Name" class="form-control">
	                </div>
	                <div class="form-group">
	                    <label for="email">Email address</label>
	                    <input value="<?php echo $value['email'];?>"  type="text" id="email" name="email" class="form-control">
	                </div>
	                <div class="form-group">
	                    <label for="password">Password</label>
	                    <input value="<?php echo $value['password']; ?>" type="password" id="password" name="password" class="form-control">
	                </div>
	                 <?php $loginid= section::get('id'); if($loginid==$id){ ?>
	                <input type="submit" name="update" class="btn btn-success" value="update"/>
	                <?php } else{ ?>
	                
	                <input disabled type="submit" name="update" class="btn btn-success" value="update"/> 
	                <?php }?>
	            </form>
	            </div>
	        </div>
	    </div>
	    
	<?php } } 
include "inc/footer.php";

?>