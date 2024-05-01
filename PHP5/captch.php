<?php
//    100 minimum no 999 max no  
   
  $a=rand(1,9);
//   echo $a; 
// A-Z is 65-90,
    $b=rand(65,90);
    $c=chr($b);
    // a-z is 97-122
    $d=rand(97,120);
    $e=chr($d);
    $f=rand(97,120);
    $g=chr($f);
    $h=rand(10,99);
    // echo $a.$c.$e.$g.$h; 
   if(isset($_POST['submit']))
   {
    $cap=$_POST['cap'];
    $cap1=$_POST['cap1'];

    if($cap == $cap1){
        echo "matched";
      
    }else{
        echo "not matched";
    }
}

  ?>

  <html>
  <head>
  </head>

  <body>
    <!-- action blank means-- same page call hoga  -->
    <form action="" method="post">
    <input type="text" readonly value="<?php echo $a.$c.$e.$g.$h?>" name="cap"/><br>
    enter captcha  <input type="text" name="cap1"/><br>
    <!-- form k andr button bnate h isliye working  -->
    <button name="submit">check </button>
    </form>
  </body>
</html>