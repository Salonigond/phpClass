<?php
$deleteID = $_REQUEST['dltId'];

$conn = mysqli_connect("localhost", "root", "","php1");

$sql ="delete from `reg2` where `id`= $deleteID";

if (mysqli_query($conn, $sql)){
    ?>
    <script>
        alert("Delete Data");
        window.location.href = "show.php";
    </script>
    <?php
}
else{
    echo "Data Not Deleted";
}

?>