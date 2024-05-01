<?php
 $dltId = $_REQUEST['dltId'];
 $conn = mysqli_connect("localhost","root","","php1");

 $sel = "SELECT * FROM `file` WHERE id='$dltId'";
 $query = mysqli_query($conn,$sel);

 $result = mysqli_fetch_array($query);

 $loc = 'img/' . $result['fileName'];

 $dlt = "DELETE FROM `file` WHERE id='$dltId'";

 if(mysqli_query($conn,$dlt)) {
    if(file_exists($loc)) {
        unlink($loc);
    }
    header("location:show.php");
 }else{
    echo"Data Not Delete";
 }

?>