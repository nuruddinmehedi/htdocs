<?php
include "inc/header.php";
include_once "lib/user.php";
section::loginusersession();
?>
    
    <?php
          $user= new user;
   if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
       $userlogin= $user->userlogin($_POST);

       
   } 

?>
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <h2>User login</h2>
	        </div>
	        <div class="panel-body">
            <div style="width:600px; margin: 0px auto;">
	            <form action="" method="post">
                   <?php if (!empty($userlogin)) { echo $userlogin; }?>
	                <div class="form-group">
	                    <label for="email">Email address</label>
	                    <input type="text" id="email" name="email" class="form-control">
	                </div>
	                <div class="form-group">
	                    <label for="password">Password</label>
	                    <input type="password" id="password" name="password" class="form-control">
	                </div>
	                <button name="submit" class="btn btn-success">Login</button>
	            </form>
	            </div>
	        </div>
	    </div>
	    
	<?php
include "inc/footer.php";

?>