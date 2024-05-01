<?php

 $a=$_POST['name'];
 $b=$_POST['email'];
 $c=$_POST['pass'];
 $d=$_POST['city'];

 $date=date("d/m/y");

 date_default_timezone_set("asia/kolkata");

 $time=date("h:i:sa");

 $datetime=$date." ".$time;

 $conn=mysqli_connect("localhost","root","","php4");

 $ins="insert into signup(name,email,password,city,datetime) values('$a','$b','$c','$d','$datetime')";

 if(mysqli_query($conn,$ins))
{

    $ins1="insert into signin(email,password,datetime) values('$b','$c','$datetime')";
    if(mysqli_query($conn,$ins1))
    {
        //echo "all ok";
        header("location:signup.php?msg=success");
    }
    else{
        //echo "signin data not store";
        header("location:signup.php?msg=failed");
    }
    
}
else{
    echo "signup data not store";
    
}


 


?>