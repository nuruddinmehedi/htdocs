<?php
include "inc/header.php";
include "lib/user.php";
section::loginusersession();

?>
    
    <?php
          $user= new user;
   if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
       $userreg= $user->userregistation($_POST);

       
   } 

?>
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <h2>User register</h2>
	        </div>
	        <div class="panel-body">
            <div style="width:600px; margin: 0px auto;">
	            <form action="" method="post">
                 <?php if (!empty($userreg)) { echo $userreg; }?>
                  <div class="form-group">
	                    <label for="Username">User name</label>
	                    <input type="text" id="Username" name="Username" class="form-control">
	                </div>
	                  <div class="form-group">
	                    <label for="Name">Name</label>
	                    <input type="text" id="Name" name="Name" class="form-control">
	                </div>
	                <div class="form-group">
	                    <label for="email">Email address</label>
	                    <input type="text" id="email" name="email" class="form-control">
	                </div>
	                <div class="form-group">
	                    <label for="password">Password</label>
	                    <input type="password" id="password" name="password" class="form-control">
	                </div>
	                <button type="submit" name="submit" class="btn btn-success">Register</button>
	            </form>
	            </div>
	        </div>
	    </div>
	    
	<?php
include "inc/footer.php";

?>