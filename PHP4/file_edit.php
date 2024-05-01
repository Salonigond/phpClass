<html>
    <head></head>
    <body>
        <h1>File Edit</h1>
        <?php
        $id=$_REQUEST['idd'];
        $conn=mysqli_connect("localhost","root","","php4");
        $sel="select * from file_tbl where id=$id";
        $r=mysqli_query($conn,$sel);
        $k=mysqli_fetch_array($r,MYSQLI_BOTH);

        ?>
        <form action="file_update.php" method="post" enctype="multipart/form-data">
            <img src="fileimage/<?php echo $k['1']?>"
            height="100px" width="100px"/><br>
            <input type="hidden" name="id" value="<?php echo $k['0']?>"/><br>
            Choose new file<input type="file" name="file"/><br>
            <button>Updated</button>

        </form>
    </body>
</html>