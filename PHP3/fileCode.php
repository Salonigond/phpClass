<?php
$a = $_FILES['img']['name'];
//echo "<br>".$a;
$b = $_FILES['img']['tmp_name'];
//echo "<br>".$b;
$c = $_FILES['img']['type'];
//echo "<br>".$c;
$d = $_FILES['img']['size'];
//echo "<br>".$d;

$crtDate = date('dmYHis');

$fileExtension = pathinfo($a, PATHINFO_EXTENSION);

$newFileName = $crtDate . '.' .$fileExtension;

$uploadDirectory = 'img/';
$newFilePath = $uploadDirectory . $newFileName;

$conn = mysqli_connect("localhost","root","","php1");
$ins="INSERT INTO `file`(`fileName`) VALUES ('$newFileName')";
$query = mysqli_query($conn,$ins);
// if($query){
    
//     ?>
//     <script>
//        alert("your data is saved!");
//        window.location.href='file.php';
//     </script>
//     <?php
// }else{
//     echo"Data not save.";
// }
// if(move_uploaded_file($b,$newFilePath)){
//     echo "file moved";
// }else{
//     echo"file not moved";
// }
if(mysqli_query($conn,$ins)){
    if(move_uploaded_file($b,$newFilePath)){
        echo"Data save and file moved";
    }else{
        echo"file not moved";
    }
}else{
    echo "Data not Insert";
}