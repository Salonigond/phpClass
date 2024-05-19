<?php
$a = $_POST['candidatename'];
$b = $_POST['fathername'];
$c = $_POST['occupation'];
$d = $_POST['mothername'];
$e = $_POST['occupation'];
$f = $_POST['housename'];
$g = $_POST['village'];
$h = $_POST['block'];
$i = $_POST['city'];
$j = $_POST['district'];
$k = $_POST['state'];
$l = $_POST['pincode'];
$m = $_POST['nationality'];
$n = $_POST['dateofbirth'];
$o = $_POST['religion'];
$p = $_POST['gnd'];
$q = $_POST['mobileno'];
$r = $_POST['alternativeno'];
$s = $_POST['email'];
$t = $_POST['aadharno'];
$u = $_POST['10thboard'];
$v = $_POST['10thpassingyear'];
$w = $_POST['10thpercentage'];
$x = $_POST['12thboard'];
$y = $_POST['12thpassingyear'];
$z = $_POST['12thpercentage'];
$A = $_POST['graduationboard'];
$B = $_POST['graduationpassingyear'];
$C = $_POST['graduationpercentage'];
$D = $_POST['postgraduationboard'];
$E = $_POST['postgraduationpassingyear'];
$F = $_POST['postgraduationpercentage'];
$G = $_POST['companyname'];
$H = $_POST['designation'];
$I = $_POST['dateform'];
$J = $_POST['datetotill'];
$K = $_POST['datetoapply'];
$L = $_FILES['resume']['name'];
$M = $_FILES['aadharcard']['name'];
$N = $_FILES['photo']['name'];
$O = $_POST['recieptno'];


$con = mysqli_connect("localhost", "root", "", "php4");

$loc = "img/";


$ins = "INSERT INTO jobform(id, candidatename, fathername, occupation, mothername, occupationm, housename, village, block, city, district, state, pincode, nationality, dateofbirth, religion, category, mobileno, alternativeno, emailid, aadharno, 10thboard, 10thpassingyear, 10thpercentage, 12thboard, 12thpassingyear, 12thpercentage, graduationboard, graduationpassingyear, graduationpercentage, postgraduationboard, poatgrduationpassing year, postgraduationpercentage, companyname, designation, dateform, datetotill, dateofapply, resume, aadharcard, photo, recieptnumber) VALUES
 ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l',
 '$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$A','$B',
 '$C','$D','$E','$F','$G','$H','$I','$J','$K','$K','$L','$M','$N','$O')";

if (mysqli_query($con, $ins)) {
    echo "data store";
} else {
    echo "data not store";
}
?>