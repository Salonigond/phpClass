<?php
$userId = $_POST['userId'];

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gnd'];
$hobby = implode(',',$_POST['hby']);
$city = $_POST['city'];
$address = $_POST['add'];

$conn = mysqli_connect("localhost", "root", "","php1");

$up = "update `reg2` set `name`='$name', `dob`='$dob', `gender`='$gender', `hobby`='$hobby', `city`='$city', `address`='$address' where `id`= $userId";
if(mysqli_query($conn, $up)){
    header("location:show.php");
}
else{
    echo "Error 400";
}


?>