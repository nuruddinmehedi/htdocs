<?php
include_once "db.php";
include_once "secetion.php";
class user{
    private $db;
    public function __construct(){
        
        $this->db= new db;
    }
    
    public function userregistation($data){
        $Username=$data['Username'];
        $name=$data['Name'];
        $email=$data['email'];
        $password=md5($data['password']);
        $checkemail=$this->checkmail($email);
        if ($Username == "" or $name == ""  or $email == ""  or $password == "" ){
            $msg="<div class='alert alert-danger'><strong>Error!</strong>fild must not be empty</div>";
            return $msg;          
             
        }
        if(strlen($Username)<3){
                $msg="<div class='alert alert-danger'><strong>Error!</strong> user name is too low</div>";
            return $msg;
        } elseif(preg_match_all('/[^a-z0-9_-]+/i',$Username)){
            
            $msg="<div class='alert alert-danger'><strong>Error!</strong>user name must be alfanewmaric</div>";
            return $msg;
            
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
  $msg="<div class='alert alert-danger'><strong>Error!</strong>email not valid33</div>";
            return $msg;
} 
        if ($checkemail==true){
             $msg="<div class='alert alert-danger'><strong>Error!</strong>email alrady exist!</div>";
            return $msg;
        }  
        
        $qur="insert into user( username, name, email, password) values( :username, :name, :email, :password)";
           $result= $this->db->pdo->prepare($qur);
        $result->bindParam(':username',$Username);
        $result->bindParam(':name',$name);
        $result->bindParam(':email',$email);
        $result->bindParam(':password',$password);
       $ms= $result->execute();
        if ($ms){
  $msg="<div class='alert alert-success'><strong>successful!</strong>you are registered!</div>";
            return $msg;
        }
        else {
             $msg="<div class='alert alert-danger'><strong>sorry!</strong>faild to registered!</div>";
            return $msg;
        }
        
        
          }
   
    
    
    public function checkmail($email) {
        
       $qur="select email from user  where email=:email" ;
        $result= $this->db->pdo->prepare($qur);
        $result->bindParam(':email',$email);
        $result->execute();
        if ($result->rowCount()>0){
            return true;
        } else{
           return false;
    
        }
    }
    
    public function getloginuser($email,$password){
         
       $qur="select * from user  where email=:email and password=:password LIMIT 1" ;
        $result= $this->db->pdo->prepare($qur);
        $result->bindParam(':email',$email);
        $result->bindParam(':password',$password);
        $result->execute();
        $qe=$result->fetch( PDO::FETCH_OBJ);
        return $qe;
        
    }
    
   public function userlogin($data) {
        $email=$data['email'];
        $password=md5($data['password']);
        $checkemail=$this->checkmail($email);
        if ($email == ""  or $password == "" ){
            $msg="<div class='alert alert-danger'><strong>Error!</strong>fild must not be empty</div>";
            return $msg;          
              
       
   }
       if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
  $msg="<div class='alert alert-danger'><strong>Error!</strong>email not valid 99</div>";
            return $msg;
} 
        if ($checkemail==false){
             $msg="<div class='alert alert-danger'><strong>Error!</strong>email not exist!</div>";
            return $msg;
        }  
        
 $rg= $this->getloginuser($email,$password);   
    if(!empty($rg)){
        section::init ();
        section::set ('login', true);
        section::set ('id',$rg->id );
        section::set ('username',$rg->username );
        section::set ('name',$rg->name );
        section::set ('loginmsg',"<div class='alert alert-success'><strong>successfully!</strong>your are login</div>" );
        header("Location: index.php");
        
    } else {
         $msg="<div class='alert alert-danger'><strong>Error!</strong>email or password not valid</div>";
            return $msg;
        
    }
}
    
    
    public function getdetail(){
         $qur="SELECT * FROM user ORDER by id" ;
        $result= $this->db->pdo->prepare($qur);
         $result->execute();
        $tuse=$result->fetchAll();
        return $tuse;
        
    }
    
    public function userdataupdate($data,$id){
         $Username=$data['Username'];
        $name=$data['Name'];
        $email=$data['email'];
        $password=md5($data['password']);
        $checkemail=$this->checkmail($email);
        if ($Username == "" or $name == ""  or $email == ""  or $password == "" ){
            $msg="<div class='alert alert-danger'><strong>Error!</strong>fild must not be empty</div>";
            return $msg;          
             
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
  $msg="<div class='alert alert-danger'><strong>Error!</strong>email not valid33</div>";
            return $msg;
}  
        
        $qur="update user set 
        username=:username,
        name=:name,
        email=:email,
        password=:password
        where id=:id
        ";
           $result= $this->db->pdo->prepare($qur);
        $result->bindParam(':username',$Username);
        $result->bindParam(':name',$name);
        $result->bindParam(':email',$email);
        $result->bindParam(':password',$password);
        $result->bindParam(':id',$id);
         $ms= $result->execute();
        if ($ms){
  $msg="<div class='alert alert-success'><strong>successful!</strong>you are update!</div>";
            return $msg;
        }
        else {
             $msg="<div class='alert alert-danger'><strong>sorry!</strong>faild to update!</div>";
            return $msg;
        }
        
        
    }
    
    public function getdatabyusingid($id){
        
          $qur="SELECT * FROM user where id=:id" ;
        $result= $this->db->pdo->prepare($qur);
         $result->bindParam(':id',$id);
         $result->execute();
        $tuse=$result->fetchAll();
        return $tuse;
    }
    
}

?>