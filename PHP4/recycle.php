<?php
$conn=mysqli_connect("localhost","root","","php4");

$delid=$_REQUEST['id'];

$ins="insert into register(name,email,password,city) select name,email,password,city from register1 where id=$delid";
if(mysqli_query($conn,$ins))
{

$del="delete from register1 where id=$delid";
if(mysqli_query($conn,$del))
{
    header("location:show.php");
}
}


?>