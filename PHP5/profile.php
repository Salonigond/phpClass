<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();
    $sesid = $_SESSION['user'];

    $con = mysqli_connect("localhost", "root", "", "php4");

    $sel = "select * from register  where email='$sesid'";
    $r = mysqli_query($con, $sel);
    $k = mysqli_fetch_array($r, MYSQLI_BOTH);


    ?>
    <table>
        <tr>
            <th>Name</th>
            <td> <?php  echo $k['name'] ?> </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php  echo $k['email'] ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php  echo $k['password'] ?></td>
        </tr>
        <tr>
            <th>City</th>
            <td><?php  echo $k['city'] ?></td>
        </tr>
        <tr>
            <th>Action</th>
            <td><a href="changeprofile.php">Change</a></td>
        </tr>
    </table>
</body>

</html>