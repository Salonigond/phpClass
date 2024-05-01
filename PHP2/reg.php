<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="regcode.php" method="post" enctype="multipart/for-date">
        Name: <input type="text" name="name" required><br><br>
        DOB: <input type="date" name="dob" required><br><br>
        Gender: 
        <input type="radio" name="gnd" value="Male">Male
        <input type="radio" name="gnd" value="Female">Female
        <br><br>

        Hobby:
        <input type="checkbox" name="hby[]" value="Cricket">Cricket,
        <input type="checkbox" name="hby[]" value="Hockey">Hockey,
        <input type="checkbox" name="hby[]" value="Music">Music
        <br><br>
        City:
        <select name="city">
        <option value="Lucknow"> Lucknow</option>
        <option value="kanpur">kanpur</option>
        <option value="jaipur">jaipur</option>
        <option value="sultanpur">sultanpur</option>
    </select>
    <br><br>
    Address: <br>
    <textarea name="add"></textarea>
    <br><br>
        <button>Submit</button>
    </form>
</body>
</html>