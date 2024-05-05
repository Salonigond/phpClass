<?php
if(isset($_POST['btn']));
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['city'];
$conn=mysqli_connect("localhost","root","","php4");

$sel="select * from register where email='$b'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['2']!=$b)
{


$ins="insert into register(name,email,password,city) values('$a','$b','$c','$b')";

if(mysqli_query($conn,$ins))
{
    //echo "data store";
    echo "<script>window.location.href='register.php';alert('data store')</script>";
}
else{
    //echo "data not store";
    echo "<script>window.location.href='register.php';alert('data not store')</script>";
}
}


else{
    echo "mailid already exists";
}


?>