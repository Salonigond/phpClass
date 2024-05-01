<?php
$editId = $_REQUEST['edId'];
$conn = mysqli_connect("localhost", "root", "","php1");

$sel ="select * from `reg2` where `id`= $editId";
$query = mysqli_query($conn, $sel);
$res = mysqli_fetch_array($query);
//echo "<pre>";
//print_r($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="editCode.php" method="post" enctype="multipart/for-date">
        <input type="hidden" name="userId" value="<?php echo $res['id']; ?>">

        Name: <input type="text" name="name" value="<?php echo $res['name'] ?>" readonly><br><br>
        DOB: <input type="date" name="dob" value="<?php echo $res['dob'] ?>"><br><br>
        Gender: 
        <input type="radio" name="gnd" value="Male" <?php if($res['gender']=='Male'){ echo 'checked';}?>>Male
        <input type="radio" name="gnd" value="Female" <?php if($res['gender']=='Female'){ echo 'checked';}?>>Female
        <br><br>

        <?php $hob = explode(',', $res['hobby']); ?>

        Hobby:
        <input type="checkbox" name="hby[]" value="Cricket"
         <?php foreach($hob as $hobby){
            if($hobby=='Cricket'){
                echo "checked";
            }
         } ?>
         >Cricket
        
        <input type="checkbox" name="hby[]" value="Hockey"
        <?php foreach($hob as $hobby){
            if($hobby=='Hockey'){
                echo "checked";
            }
         } ?>
         >Hockey
        <input type="checkbox" name="hby[]" value="Music" 
        <?php foreach($hob as $hobby){
            if($hobby=='Music'){
                echo "checked";
            }
         } ?>
         >Music
        <br><br>

        City:
        <select name="city">
        <option value="Lucknow" <?php if($res['city']=='Lucknow'){echo 'selected';}  ?>> Lucknow</option>
        <option value="kanpur" <?php if($res['city']=='Kanpur'){echo 'selected';}  ?>>kanpur</option>
        <option value="jaipur" <?php if($res['city']=='jaipur'){echo 'selected';}  ?>>jaipur</option>
        <option value="sultanpur" <?php if($res['city']=='sultanpur'){echo 'selected';}  ?>>sultanpur</option>
    </select>
    <br><br>
    Address: <br>
    <textarea name="add"><?php echo $res['address']; ?>
    </textarea>
    <br><br>
        <button>Submit</button>
    </form>
</body>
</html>
