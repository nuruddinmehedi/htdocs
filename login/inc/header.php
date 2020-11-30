<?php
$filepath= realpath(dirname(__FILE__));
include_once $filepath."/../lib/secetion.php";  
include_once"lib/secetion.php";
   section::init ();

?>



<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Login and register</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="inc/bootstrap.min.css">

</head>
<?php
    if(isset($_GET['action']) && $_GET['action']== 'logout'){
        
        section::destory();
    }
    ?>
<body>
	
	<div class="container">
	    <nav class="navbar navbar-default">
	        <div class="container-fluid">
	            <div class="navbar-header">
	                <a class="navbar-brand" href="index.php">login and register system with php and pdo</a>
	            </div>
	            <ul class="navbar-nav nav pull-right">
	           
	                <?php
                    $id= section::get('id');
                    $loginstatus= section::get('login');
                    if ($loginstatus== true){ ?>
                        
                           <li><a href="profile.php?id= <?php echo $id;?>">profile</a></li>
	                <li><a href="?action=logout">logout</a></li> 
                        
                 <?php   }
                    else{ ?>
                             
	 <li><a href="login.php">login</a></li>
	                <li><a href="register.php">register</a></li>
                        
                  <?php  }
                    ?>
	          
	            </ul>
	        </div>
	    </nav>