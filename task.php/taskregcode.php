<?php

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['city'];
$e=$_POST['gnd'];
$f=implode(',',$_POST['hby']);
$g=$_POST['state'];
$h=$_POST['pin'];
$i=$_POST['adds'];

$j=$_FILES['img']['name'];
$temp=$_FILES['img']['tmp_name'];

$k=$_FILES['thumb']['name'];
$tempTh=$_FILES['thumb']['tmp_name'];

$l=$_FILES['certi']['name'];
$tempCe=$_FILES['certi']['tmp_name'];

$conn=mysqli_connect("localhost","root","","php4");

$loc="image/";

// $ins="INSERT INTO taskreg(name,email,password,city,gender,hobby,state,pin code,address,picture, thumb impression,certificate) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

$ins = "INSERT INTO `taskreg`(`name`, `email`, `password`, `city`, `gender`, `hobby`, `state`, `pin code`, `address`, `picture`, `thumb tmpression`, `certificate`)
 VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

if(mysqli_query($conn,$ins))
{
    move_uploaded_file($temp,$loc.$j);
    move_uploaded_file($tempTh,$loc.$k);
    move_uploaded_file($tempCe,$loc.$l);
 
    //echo "data store";
    echo "<script>window.location.href='taskreg.php';alert('data store')</script>";
}
else{
    //echo "data not store";
    echo "<script>window.location.href='taskreg.php';alert('data not store')</script>";
}
?>