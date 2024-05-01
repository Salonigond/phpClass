<?php
$userId = $_REQUEST['edId'];
$conn = mysqli_connect("localhost","root","","php1");
$sel = "SELECT * FROM `file` WHERE `id`=$userId";
$query = mysqli_query($conn,$sel);
$result = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit File Page</h1>

    <img src="img/<?=$result['filename']; ?>" height="200px">

    <form action="editCode.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="userId" value="<?php echo $result['id'] ?>">
        Photo: <input type="file" name="img" required>
        <button>Save</button>
    </form>    
</body>
</html>