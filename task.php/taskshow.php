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
            <th>Gender</th>
            <th>Hobby</th>
            <th>State</th>
            <th>Pin code</th>
            <th>Address</th>
            <th>Picture</th>
            <th>Thumb Impression</th>
            <th>Certificate</th>
            </tr>

            <?php
            $conn=mysqli_connect("localhost","root","","php4");

            $sel="select * from taskreg";
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
                <td><?php echo $k['5'] ?></td>
                <td><?php echo $k['6'] ?></td>
                <td><?php echo $k['7'] ?></td>
                <td><?php echo $k['8'] ?></td>
                <td><?php echo $k['9'] ?></td>
                <td><img src="image/<?php echo $k['10'] ?>
                " height="100px" width="100px" /></td>
                <td><img src="image/<?php echo $k['11'] ?>
                " height="100px" width="100px" /></td>
                <td><img src="image/<?php echo $k['12'] ?>
                " height="100px" width="100px" /></td>  
                    
                <td><a href="taskdel.php?idd=<?php echo $k['0'] ?>">Delete</td>
            </tr>

            <?php
            $i++;
            }
            ?>

        </table>
    </body>
</html>