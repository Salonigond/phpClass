<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['password'];


//echo "Name: ". $a;
//echo "<br>";
//echo "Email: ". $b;
//echo "<br>";
//echo "Phone No: ". $c;
//echo "<br>";
//echo "Password: ". $d;

date_default_timezone_set("asia/kolkata");
$date = date("d/m/y");
$time = date("h:i:sa");

$datetime = $date ." / ".$time;

// DB conn

$conn = mysqli_connect("localhost","root","","php1");

// if($conn){
//     echo "success";
// }
// else{
//     echo "error";
// }

$ins = "insert into `reg`(`name`, `email`, `phone`,`password`, `datetime`)values('$a','$b','$c','$d','$datetime')";
$query =mysqli_query($conn, $ins);

if($query){
    echo "Data Save!";
}
else{
    echo "Data Not Save.";
}




?>