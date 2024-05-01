<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
            </tr>

            <?php
            $conn=mysqli_connect("localhost","root","","php4");

            $sel="select * from register";
            $r=mysqli_query($conn,$sel);
            $i=1;
            while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
            {
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $k['name'] ?></td>
                <td><?php echo $k['2'] ?></td>
                <td><?php echo $k['3'] ?></td>
                <td><?php echo $k['4'] ?></td>
                <td><a href="delete.php?idd=<?php echo $k['0'] ?>">Delete</td>
                <td><a href="edit.php?idd=<?php echo $k['0']?>">Edit</a></td>
                
            </tr>

            <?php
            $i++;
            }
            ?>

        </table>

        <table border="1">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th> 
            </tr>

            
                <?php
                $sell="select * from register1";
                $r1=mysqli_query($conn,$sell);
                while($k1=mysqli_fetch_array($r1,MYSQLI_BOTH))
                {

                ?>

                <tr>
                <td><?php echo $k1['0'] ?></td>
                <td><?php echo $k1['1'] ?></td>
                <td><?php echo $k1['2'] ?></td>
                <td><?php echo $k1['3'] ?></td>
                <td><?php echo $k1['4'] ?></td>
                <td><a href="recycle.php?id=<?php echo $k1['0']?>">Recycle</a></td>
                </tr>
                <?php
                }
                ?>


        </table>
    </body>
</html>