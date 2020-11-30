<?php
include 'DB.php';

class modul{
    public function getdata(){
        $qur="select * from student__tab";
        $smtm=DB::prepare($qur);
        $smtm->execute();
       return $smtm->fetchAll();
    }
    
}


?>