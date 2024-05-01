<?php

$a = $_FILES['img'] ['name'];
//echo $a;
//echo "<br>";

$b = $_FILES['img'] ['tmp_name'];
//echo $b;
//echo "<br>";

$c = $_FILES['img'] ['type'];
//echo $c;
//echo "<br>";

$d = $_FILES['img'] ['size'];
//echo $d;

$conn=mysqli_connect("localhost","root","","php4");

$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$loc="fileimage/";

$ins="insert into file_tbl(name,date,time) values('$a','$date','$time')";

if(mysqli_query($conn,$ins))
{
    move_uploaded_file($b,$loc.$a);
    header("location:fileshow.php");
}
else{
    echo "data not store";
}

?>