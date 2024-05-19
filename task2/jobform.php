<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  box-sizing: border-box;
}

        .col-sm-8{
            display:flex;
        }


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

.col-sm-5 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-sm-7 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
th{
    width:25%;
}
button{
    background-color:yellow;
}




    </style>
</head>
<body>
    <div class="container">
        <form action="jobcode.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-5">
                Candidate's Name
                </div>
                    
                
                <div class="col-sm-7">
            
                <input type="text" placeholder="Candidate's name" name="candidatename">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Father's Name</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Father's name" name="fathername">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Occupation</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Occupation"name="occupationf">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Mother's Name</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Mother's name" name="mothername">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Occupation</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Occupation" name="occupationm">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Permanent Address</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="House Name/Number" name="housename">
                    <input type="text" placeholder="Village/Town/Ward" name="village">
                    <input type="text" placeholder="Block" name="block">
                    <input type="text" placeholder="City" name="city">
                    <input type="text" placeholder="District" name="district">
                    <input type="text" placeholder="State" name="state">
                    <input type="text" placeholder="Pin Code" name="pincode">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Nationality</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Nationality" name="nationality">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Date of Birth</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="dd-mm-yy" name="dateofbirth">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Religion</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Religion" name="religion">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Category</div>
                <div class="col-sm-7">
                <input type="radio" name="gnd" value="male">Male
                <input type="radio" name="gnd" value="Female">Female
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Mobile Number</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Mobile Number"name="mobileno">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Alternative Number</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Alternative Number" name="alternativeno">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">Email Id</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Email Id" name="email">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">Adhar Card Number</div>
                <div class="col-sm-7">
                    <input type="text" placeholder="Adhar Card Number" name="aadharno">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table border="1">
                        <tr>
                        <th rowspan="6">Education Details</th>
                        <th>Exam Name</th>
                        <th>Board/University</th>
                        <th>Year of Passing</th>
                        <th>Percentage%</th>
</tr>
                        <tr>
                            <td>10th</td>
                            <td><input type="text" placeholder="10th board" name="10thboard"></td>
                            <td><input type="text" placeholder="10th passing year" name="10thpassingyear"></td>
                            <td> <input type="text" placeholder="10th percentage" name="10thpercentage"></td>
                        </tr>

                        <tr>
                            <td>12th/Diploma</td>
                            <td><input type="text" placeholder=" 12th Board" name="12thboard"></td>
                            <td><input type="text" placeholder="12th Passsing year" name="12thpassingyear"></td>
                            <td> <input type="text" placeholder="12th percentage" name="12thpercentage"></td>
                        </tr>

                        

                        <tr>
                            <td>Graduation</td>
                            <td><input type="text" placeholder="  Graduation Board" name="graduationboard"></td>
                            <td><input type="text" placeholder="Graduation Passing year" name="graduationpassingyear"></td>
                            <td> <input type="text" placeholder="Graduation Percentage" name="graduationpercentage"></td>
                        </tr>

                        <tr>
                            <td>Post Graduation</td>
                            <td><input type="text" placeholder="  Post Graduation Board" name="postgraduationboard"></td>
                            <td><input type="text" placeholder="Post Graduation Passing Year" name="postgraduationpassingyear"></td>
                            <td> <input type="text" placeholder="Post Graduation percentage" name="postgraduationpercentage"></td>
                        </tr>
                    </table>
                    <table border="1">
                        <tr>
                            <th rowspan="2">Working Experience</th>
                            <th>Company NAme</th>
                            <th>Designation</th>
                            <th>Date Form</th>
                            <th>Date to till</th>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="company Name" name="companyname"></td>
                            <td><input type="text" placeholder="designation" name="designation"></td>
                            <td><input type="text" placeholder="dd-mm-yy" name="dateform"></td>
                            <td><input type="text" placeholder="dd-mm-yy"name="datetotill"></td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-5"> Date of Apply</div>
                <div class="col-sm-7"><input type="text" placeholder="dd-mm-yy" name="datetoapply"></div>
            </div>

            <div class="row">
                <div class="col">
                    <table border="1">
                        <tr>
                            <th rowspan="2">Upload Documents(Pdf)</th>
                            <th>Resume</th>
                            <th>Aadhar Card</th>
                            <th>Passport Size Photo</th>
                        </tr>
                        <tr>
                            <td><input type="file" name="resume"></td>
                            <td><input type="file" name="aadharcard"></td>
                            <td><input type="file" name="photo"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Registration Fee Receipt Number:<input type="text" placeholder="Receipt Number" name="recieptno"> 

                </div>
            </div>
              <center>  <button>Submit</button></center>
        </form>
    </div>
</body>
</html>