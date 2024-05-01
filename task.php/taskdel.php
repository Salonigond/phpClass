<?php

$conn=mysqli_connect("localhost","root","","php4");

$delid=$_REQUEST['idd'];

$sel="select * from taskreg where id=$delid";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
$path="image/".$k['10'];
$path1="image/".$k['11'];
$path2="image/".$k['12'];

$del="delete from taskreg where id=$delid";
if(mysqli_query($conn,$del))
{
    unlink($path);
    unlink($path1);
    unlink($path2);
    
    header("location:taskshow.php");
}

?>
