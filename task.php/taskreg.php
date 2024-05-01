<html>
    <head></head>
    <body>
        <h1>Register</h1>
        <form action="taskregcode.php" method="post" enctype="multipart/form-data">
            Name<input type="text" name="name"/><br><br>
            Email<input type="email" name="email"/><br><br>
            Password<input type="password" name="pass"/><br><br>
            City
            <select name="city">
              <option> Lucknow</option>
       
              <option>kanpur</option>
              <option>jaipur</option>
              <option>sultanpur</option>
    </select>
    <br><br>

            Gender:
            <input type="radio" name="gnd" value="Male">Male
        <input type="radio" name="gnd" value="Female">Female
        <br><br>

            Hobby:
            <input type="checkbox" name="hby[]" value="Cricket">Cricket,
        <input type="checkbox" name="hby[]" value="Hockey">Hockey,
        <input type="checkbox" name="hby[]" value="Music">Music
        <br><br>

            State<input type="text" name="state"/><br><br>
            Pin code<input type="number" name="pin"/><br><br>
            Address<textarea name="adds"></textarea><br><br>
            Picture<input type="file" name="img"/><br><br>
            Thumb Tmpression<input type="file" name="thumb"/><br><br>
            Certificate<input type="file" name="certi"/><br><br>
            <button name="btn">Submit</button>
        </form>
    </body>
</html>