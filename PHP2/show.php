<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>show All Data</h1>
    </center>
    <table border="">
        <thead>
            <th>SrNo</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>City</th>
            <th>Address</th>
            <th>Datetime</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "php1");
            $sel = "select * from `reg2`";
            $query = mysqli_query($conn, $sel);
            //$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
            //echo "<pre>";
            //print_r($result);
            $sr =1;
            while ($result = mysqli_fetch_array($query, MYSQLI_BOTH)){

                ?>
            

            <tr>
                <td><?php echo $sr; ?></td>
                <td><?php echo $result['name']?></td>
                <td><?php echo $result['dob']?></td>
                <td><?php echo $result['gender']?></td>
                <td><?php echo $result['hobby']?></td>
                <td><?php echo $result['city']?></td>
                <td><?php echo $result['address']?></td>
                <td><?php echo $result['datetime']?></td>

                <td>
                    <a href="edit.php?edId=<?php echo $result['id']; ?>">Edit</a>
                </td>

                <td>
                    <a href="delete.php?dltId=<?php echo $result['id']; ?>">Delete</a>
                </td>
                
            </tr>

            <?php
            $sr++;
            }
            ?>
            </tbody>
    </table>
</body>
</html>