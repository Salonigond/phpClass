<?php
$userId = $_POST['userId'];

$a = $_FILES['img']['name'];

$b = $_FILES['img']['tmp_name'];


$crtDate = date('dmYHis');

$fileExtension = pathinfo($a, PATHINFO_EXTENSION);

$newFileName = $crtDate . '.' .$fileExtension;

$uploadDirectory = 'img/';
$newFilePath = $uploadDirectory . $newFileName;

$conn = mysqli_connect("localhost","root","","php1");
$sel = "SELECT * FROM `file` WHERE `id`=$userId";
$query = mysqli_query($conn,$sel);
$result = mysqli_fetch_array($query);

$oldImg = 'img/'.$result['filename'];

$up = "update file set filename='$newFileName' where id ='$userId'";
if (mysqli_query($conn, $up)){
    unlink($oldImg);
    move_uploaded_file($b,$newFilePath);
    header("location:show.php");

}
else{
    echo "File Not Update";
}


?>