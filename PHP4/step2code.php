<?php
if(isset($_POST['btn']))
{
$d=$_POST['city'];
$e=$_POST['pin'];
$f=$_POST['adds'];

$getid=$_POST['getid'];

$conn=mysqli_connect("localhost","root","","php4");

$upd="UPDATE `steps` SET `city`='$d',`pincode`='$e',`address`='$f' WHERE id=$getid";


if(mysqli_query($conn,$upd))
{
    header("location:step3.php?idd=$getid");

    echo "data updated";
}

else{
    echo "data not update";
}


}

?>
