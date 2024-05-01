<?php
echo "<br>".$name = $_POST['name'];
echo "<br>".$dob = $_POST['dob'];
echo "<br>".$gender = $_POST['gnd'];
echo "<br>".$hobby = implode(',',$_POST['hby']);
echo "<br>".$city = $_POST['city'];
echo "<br>".$address = $_POST['add'];

$conn = mysqli_connect("localhost","root","","php1");

$ins = "insert into `reg2`(`name`, `dob`, `gender`, `hobby`, `city`, `address`)values('$name','$dob','$gender','$hobby','$city','$address')";
$query =mysqli_query($conn, $ins);

if($query){
    //echo "Data Save!";
    ?>
    <script>
        alert("Your Data is Saved!");
        window.location.href='reg.php';
    </script>
    <?php
}
else{
    echo "Data Not Save.";
}

?>