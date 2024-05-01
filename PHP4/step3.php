<html>
    <head></head>
    <body>
    <h1>Step3</h1>
    <form action="step3code.php" method="post" enctype="multipart/form-data">
    <?php
      $getid=$_REQUEST['idd'];
      ?>
      <input type="hidden" value="<?php echo $getid ?>" name="getid"/><br>

            Certificate:
           <input type="file" name="img"/><br><br>
            Thumb:
            <input type="file" name="thumb"/><br><br>
            Signature:
            <input type="file" name="sign"/><br><br>
            
            <button name="btn">Submit</button>
            </form>

    </body>
</html>