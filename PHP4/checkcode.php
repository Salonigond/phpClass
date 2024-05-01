<?php

$a=$_POST['pass1'];
$b=$_POST['pass2'];

if(!empty($a))
{
    if(!empty($b))
    {
        if($a==$b){
            echo "password match";
        }
    else{
        echo "password not match";
    }
}
    else{
        echo "second input is blank";

    }

}
else{
    echo "first input blank";
}


?>