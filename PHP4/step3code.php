<?php
if(isset($_POST['btn']))
{

$g=$_FILES['img']['name'];
$temp=$_FILES['img']['tmp_name'];

$h=$_FILES['thumb']['name'];
$tempTh=$_FILES['thumb']['tmp_name'];

$i=$_FILES['certi']['name'];
$tempCe=$_FILES['certi']['tmp_name'];

$getid=$_POST['getid'];

$conn=mysqli_connect("localhost","root","","php4");

$upd="UPDATE `steps` SET `certi`='$g',`thumb`='$h',`sign`='$i' WHERE id=$getid";

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