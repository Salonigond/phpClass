<?php
$conn=mysqli_connect("localhost","root","","php4");

$id=$_REQUEST['idd'];

$sel="select * from register where id=$id";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH); 
?>
<html>
    <head>

    </head>
    <body>
    <h1>Edit Page</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id?>"/>
            Name<input type="text" name="name" value="<?php echo $k['1']?>"/><br><br>
            Email<input type="email" name="email" value="<?php echo $k['2']?>"/><br><br>
            Password<input type="password" name="pass" value="<?php echo $k['3']?>"/><br><br>
            City<input type="text" name="city" value="<?php echo $k['4']?>"/><br><br>
            <button name="btn">Submit</button>
        </form>
    </body>
</html>