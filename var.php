<?php
//local var

//function demo1(){
    //$=10;
    //echo $a;
//}

//demo1();
//echo $a;

//global var
$a =15;
$b =25;
function demo2()
{
    global $a, $b;
    //echo $a . "<br>";
    $a= $a + $b;
}

demo2();
echo $a;



?>