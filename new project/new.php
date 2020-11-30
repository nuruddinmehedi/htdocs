
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit"  name="submit">submit</button>
</form>
<?php
if($_FILES['file']){
    print_r($_FILES);
    $fname=$_FILES['file']['name'];
    $ftype=$_FILES['file']['type'];
    $ftmpname=$_FILES['file']['tmp_name'];
    $fsize=$_FILES['file']['size'];
    $ferroro=$_FILES['file']['error'];
    move_uploaded_file($ftmpname, $fname);
    echo'successful';
}
else{
    echo 'unsuccessful';
}
?>