<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>show A11 Data</h1>
    </center>
    <table border="1">
        <thead>
            <th>SrNo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Password</th>
            <th>DataTime</th>

        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "php1");
            $sel = "select * from `reg`";
            $query = mysqli_query($conn, $sel);
            //$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
            //echo "<pre>";
            //print_r($result);

            while ($result = mysqli_fetch_array($query, MYSQLI_BOTH)){
                ?>
            

            <tr>
                <td><?php echo $result['id']?></td>
                <td><?php echo $result['name']?></td>
                <td><?php echo $result['email']?></td>
                <td><?php echo $result['phone']?></td>
                <td><?php echo $result['password']?></td>
                <td><?php echo $result['datetime']?></td>
                
            </tr>

            <?php
            }
            ?>
            </tbody>
    </table>
</body>
</html>