<?php
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['city'];

$conn=mysqli_connect("localhost","root","","php4");

$up="update register set name='$a',email='$b',password='$c',city='$d' where id=$id";
if(mysqli_query($conn,$up))
{
    header("location:show.php");
}

?>
