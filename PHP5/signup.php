<?php

if(isset($_REQUEST['msg']))
{
    if($_REQUEST['msg']=='success')
    {
        echo "data store";
    }

    if($_REQUEST['msg']=='failed')
    {
        echo "data not store";
    }

    
}

?>

<html>
    <head></head>
    <body>
        <h1>Sign up</h1>
        <form action="signupcode.php" method="post">
            Name<input type="text" name="name"/><br><br>
            Email<input type="text" name="email"/><br><br>
            Password<input type="text" name="pass"/><br><br>
            City<input type="text" name="city"/><br><br>
            <button>Submit</button>
        </form>
    </body>
</html>