<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Show Page</h1>
    <table border="2">
        <tr>
            <th>SrNo</th>
            <th>File</th>
            <th>DateTime</th>
            <th colspan="2">Action</th>
</tr>
<?php
    $conn = mysqli_connect("localhost","root","","php1");
    $sel = "SELECT * FROM file";
    $query = mysqli_query($conn,$sel);
    $sr = 1;
    while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
        ?>
    

<tr>
    <td><?php echo $sr;?></td>
    <td>
        <img src="img/<?=$result['filename']; ?>" height="200px">
    </td>
    <td><?php echo $result['datetime'];?></td>
<td>
                        <a href="edit.php?edId=<?php echo $result['id'];?>">Edit</a>
               </td>
               <td>
                        <a href="delete.php?dltId=<?php echo $result['id'];?>">Delete</a>
               </td>
               <tr>
                <?php
                    $sr++;
    }
    ?>
</table>
</body>
</html>