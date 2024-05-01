<?php
$conn=mysqli_connect("localhost","root","","php4");

$delid=$_REQUEST['idd'];

$ins="insert into register1(name,email,password,city) select name,email,password,city from register where id=$delid";
if(mysqli_query($conn,$ins))
{

$del="delete from register where id=$delid";
if(mysqli_query($conn,$del))
{
    header("location:show.php");
}
}


?>