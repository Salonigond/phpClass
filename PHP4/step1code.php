<?php
if(isset($_POST['btn']))
{
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","php4");


$ins ="INSERT INTO `steps`(`name`, `email`, `password`) VALUES ('$a','$b','$c')";

if(mysqli_query($conn,$ins))
{
    $lastid=mysqli_insert_id($conn);
    header("location:step2.php?idd=$lastid");
   
    echo "data stored";
}
else{
    echo "data not store";
}
}
?>