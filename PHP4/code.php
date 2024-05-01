<?php
 if(isset($_POST['btn']))
 {
$a=$_POST['name'];
//echo "<h1>".$a."</h1>";

echo "<h1>$a</h1>";
 }

?>

<html>
    <head>

    </head>
    <body>
        <form action="" method="post">
            <label for="new">
            Name<input type="text" id="new" name="name" placeholder="Enter your details"/>
            <br><br>
</lable>
<button name="btn">Submit</button>
        </form>
    </body>
</html>
