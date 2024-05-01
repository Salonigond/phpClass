<html>
    <head></head>
    <body>
        <h1>File show Page</h1>
        <table border="1">

    <tr>
            <th>id</th>
            <th>file name</th>
            <th>date</th>
            <th>time</th>
        
            </tr>
<?php
$conn=mysqli_connect("localhost","root","","php4");
$sel="select * from file_tbl";
$r=mysqli_query($conn,$sel);
while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
{
?>
    <tr>
    <td><?php echo $k['0']?></td>
    <td><img src="fileimage/<?php echo $k['1']?>"/></td>
    <td><?php echo $k['2']?></td>
    <td><?php echo $k['3']?></td>
    <td><a href="file_edit.php?idd=<?php echo $k['0']?>">Edit</a></td>
</tr>

<?php
}
?>
</table>


    </body>
</html>