<?php
include "inc/header.php";
section::checksession();
include_once "lib/user.php";
$user= new user;


   ?>
   
    <?php
$loginmsg= section::get('loginmsg');

if(isset($loginmsg)){
    echo $loginmsg;
}
 section::set ("loginmsg",null );
?>
	    <div class="panel panel-default">
	        <div class="panel-header">
	            <h2>user list <span class="pull-right"><strong>welcome!</strong><?php 
                    
                    $name= section::get('username');
                    if(!empty($name)){
                        echo $name;
                    } else{
                    } ?></span></h2>
	        </div>
	        <div class="panel-body">
	            <table class="table table-striped">
	                <th width="20%">serial</th>
	                <th width="20%">username</th>
	                <th width="20%">name</th>
	                <th width="20%">email</th>
	                <th width="20%">action</th>
	         <?php
                $result= $user->getdetail();
                    if(!empty($result)){
                        $i=0;
                    foreach($result as $value){
                         $i++;
                    ?>       
	               <tr>
	                   <td><?php echo $i; ?></td>
	                   <td><?php echo $value['username']?></td>
	                   <td><?php echo $value['name']?></td>
	                   <td><?php echo $value['email']?></td>
	                   <td>
<a class="btn btn-success" href="profile.php?id=<?php echo $value['id']?>">view</a></td>
	               </tr>
	               <?php } } else{
                  }
                    ?>	               
	            </table>
	        </div>
	    </div>
	    
	<?php
include "inc/footer.php";

?>