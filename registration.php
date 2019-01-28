<?php require "connection.php"; ?>

<?php 
if ((isset($_POST['submit']))) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];
    $mobile = $_POST['mobile'];
    $emailid =$_POST['emailid'];

    $query = "INSERT INTO register(fname,lname,dob,course,address,city,state,country,pincode,mobile,emailid) VALUES('$fname', '$lname', '$dob', '$course', '$address', '$city', '$state', '$country', '$pincode', '$mobile', '$emailid')";

    $fire = mysqli_query($conn, $query) or die("Error in register" .mysqli_error($conn));

    if ($fire > 0) {
        $message = "Registration Successful.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        
    </script>

    <title>My Site</title>
</head>
<body>    
<!-- social media start  -->
<div class="container-fluid ">
        <div class="row social_icons">
            <div class="col-sm-3 text-center">
                <a href="#"><i class="fa fa-facebook-square" style="font-size:20px;  padding-left: 60px; padding-right:5px; color:#fff"></i></a>

                <a href="#"><i class="fa fa-twitter-square" style="font-size:20px; padding-right:5px; color:#fff"></i></a>

                <a href="#"><i class="fa fa-instagram" style="font-size:20px; padding-right:5px;  color:#fff"></i></a>

                <a href="#"><i class="fa fa-google-plus-square" style="font-size:20px; color:#fff"></i></a>
            </div>

            <div class="col-sm-9 text-right ">
                <span style="font-size:16px;  padding-right:5px; color:#fff; ">E-mail id : surajrajbhar13@gmail.com,   </span>
                <span style="font-size:16px; padding-right:30px; color:#fff ">Mobile : 00000-00000 </span>
            </div>
        </div>
    </div>
<!-- social media end -->

<!-- Navbar Starts here -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="images/logo.png" alt="RajSoft" height="70dp" style="margin-top:8px;">
            </div>

            <div class="col-sm-8 my_menu" >

                <nav class="navbar navbar-default">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav pull-right" >
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="courses.php">Courses</a></li>
                            <li class="active"><a href="registration.php">Registration</a></li>
                            <li><a href="placement.php">Placement</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                        </ul>
                    </div>                
                </nav>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
<!-- Navbar Ends here -->

<!-- marquee start -->
    <div class="container-fluid ">
        <div class="row" background=#2196F3>
            <div class="col-sm-1 noti">
                <label>Notifications</label>
            </div>
            <div class="col-sm-11 marq">
                <marquee > 
                    <b><i>New </i>Admission open in Android development.</b> &nbsp;&nbsp;&nbsp;&nbsp;
                    <b><i>New </i>Admission open in Advance Java .</b> &nbsp;&nbsp;&nbsp;&nbsp;
                    <b><i>New </i>Admission open in PHP & MySQL development.</b> &nbsp;&nbsp;&nbsp;&nbsp;
                </marquee>
            </div>
        </div>
    </div>
<!-- marquee end -->

<!-- course header starts -->
<div class="container-fluid" style="background:#4B4B4B; color:#fff; ">
        <div class="row">
    
            <div class="col-sm-12 text-center page-header ">
                <h1>New Registration</h1>
            </div>
            
        </div>
    </div>
<!-- course header ends -->

<!-- Registration Section Starts -->

<div class="container-fluid teamr">
    <div class="container">
        <div class="row ">
            <div class="col-sm-2">
            
            </div>

            <div class="col-sm-7">
            <h3 style="color:#fff;">FILL ALL THE INFORMATION CORRECTLY</h3>
            <br>
            
            <!-- <form method="post" action="studentregistered.php"> -->
            <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter  First  Name *" value="" name="fname" required   />
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter  Last  Name *" value="" name="lname" required/>
                </div>

                <div class="form-group">
                    <label for="sel1"> Select Course</label>
                    <select class="form-control" id="sel1" name="course">
                        <option value="android">Android</option>
                        <option value="autocad">Autocad</option>
                        <option value="clanguage">C Language</option>
                        <option value="ccna">CCNA</option>
                        <option value="cloudcomputing">Cloud Computing</option>
                        <option value="corejava">Core Java</option>
                        <option value="advjava">Advance Java</option>
                        <option value="iot">IOT</option>
                        <option value="phpmysql">PHP & MySQL</option>
                        <option value="python">Python</option>
                        <option value="sqlserverdba">SQL Server DBA</option>
                        <option value="wordpress">Wordpress</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea class="form-control" placeholder="Complete  Address *" name="address"></textarea>
                    
                    <!-- <input type="text" class="form-control" placeholder="Complete  Address *" name="address" value="" height="180" required/> -->
                
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter  Town/City *" name="city" value="" required/>
                </div>

                <div class="form-group">
                    
                <label for="statelist"> Select State</label>
                    <select class="form-control" id="statelist" name="state">
                        
                        <option value="">Select State</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>

                    </select>
                    
                </div>

                <div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" class="form-control" name="dob"  value=""/>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter  Country *" name="country"  value="" required/>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter  Pin  Code *" maxlength="6" name="pincode" value=""  required/>
                </div>

                <div class="form-group">
                    
                    <input type="text" class="form-control" placeholder="Enter  Mobile  Number *" name="mobile" maxlength="10" value="" required/>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter  Email-id *" value="" name="emailid" required/>
                </div>

                <br>

                <div class="text-center">
                    <button class="btn success" name="submit" >Register</button>
                </div>

            </form>

            <!-- <div class="text-left">sdijbfisd</div>
            <div class="text-right">sdijbfisd</div> -->
            </div>

            <div class="col-sm-3">
            
            </div>

        
        </div>
    </div>
</div>

<!-- Registration Section Ends -->


<!-- footer section starts -->

<div class="container-fluid myfooter">
    <div class="row">
        <div class="col-sm-12 ">
            <div class="col-sm-4 text-center">
            <br>
            <br>
            <img src="images/logo.png" alt="" width="250dp"  class="img-responsive center-block">
            <br>
            
            <h4>Follow Us On</h4>

            <a href="#"><i class="fa fa-facebook-square" style="font-size:20px;  padding-right:5px; color:#fff"></i></a>

            <a href="#"><i class="fa fa-twitter-square" style="font-size:20px; padding-right:5px; color:#fff"></i></a>

            <a href="#"><i class="fa fa-instagram" style="font-size:20px; padding-right:5px;  color:#fff"></i></a>

            <a href="#"><i class="fa fa-google-plus-square" style="font-size:20px; color:#fff"></i></a>
                
            </div>
            <div class="col-sm-4 ">
            <h3>Course List</h3>
                <ul>
                    <li>&raquo; Android Developement</li>
                    <li>&raquo; Java Development</li>
                    <li>&raquo; PHP & MySQL </li>
                    <li>&raquo; Cloud Computing</li>
                    <li>&raquo; CCNA Training</li>
                    <li>&raquo; Oracle Database</li>
                </ul>
                
                <br>
                    <h5 class="text-center">Copyright @ Suraj Rajbhar, All Rights Reserved.</h5>
            </div>
            <div class="col-sm-4">

                <h3>Contact us</h3>
                <p><strong>E-mail id :</strong> surajrajbhar13@gmail.com,</p>
                
                <p><strong>Mobile :</strong> 00000-00000</p>
                
                <p><iframe class="img-responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28496.643123503316!2d83.0521661016928!3d26.773707273989128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399125296d7a1329%3A0x5c6441e08978bf29!2sKhalilabad%2C+Uttar+Pradesh+272175!5e0!3m2!1sen!2sin!4v1547435477437"  frameborder="0" style="border:0" allowfullscreen></iframe></p>
                

            </div>
        </div>
    </div>
</div>

<!-- footer section ends -->
   
</body>
</html>