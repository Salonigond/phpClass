<html>
    <head></head>
    <body>
    <h1>Step2 Page</h1>
    <form action="step2code.php" method="post" enctype="multipart/form-data">
      <?php
      $getid=$_REQUEST['idd'];
      ?>
      <input type="hidden" value="<?php echo $getid ?>" name="getid"/><br>

            City:
            <select name="city">
              <option>Lucknow</option>
              <option>Banaras</option>
              <option>kanpur</option>
              <option>jaipur</option>
              <option>sultanpur</option>
              <option>Bihar</option>
            </select><br><br>

              Pin code:
              <input type="number" name="pin"/><br><br>

            Address:
            <textarea name="adds"></textarea><br><br>

            <button name="btn">Submit</button>
    </select>
    <br><br>

</form>

    </body>
</html>