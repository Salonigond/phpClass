<?php

$conn=mysqli_connect("localhost","root","","php4");

$a=$_FILES['file']['name'];
$b=$_FILES['file']['tmp_name'];
$id=$_POST['id'];

$loc="fileimage/";

$sel="select * from file_tbl where id=$id";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

$loc1="fileimage/".$k['1'];

$up="update file_tbl set name='$a' where id=$id";
if(mysqli_query($conn,$up))
{
    unlink($loc1);
    move_uploaded_file($b,$loc.$a);
    header("location:fileshow.php");
}
else{
    echo "data not update";
}


?>