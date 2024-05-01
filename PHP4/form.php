<?php
if(isset($_POST['save']))
{
    $a=$_POST['name'];
    $b=$_POST['city'];

    $con=mysqli_connect("localhost","root","","php4");

    $ins="insert into form(name,city) values('$a','$b')";

    if(mysqli_query($con,$ins))
    {
        echo "success";
    }
    else{
        echo "failed";
    }


}
?>
<html>
    <head></head>
    <body>
        <h1>Form page</h1>
        <form action="" method="post">
            Enter your Name<input type="text" name="name"/><br><br>
            Enter your city<input type="text" name="city"/><br>
            <button name="save">Save</button>
        </form>
    </body>
</html>