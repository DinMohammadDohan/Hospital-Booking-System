<?php
include('../session/regcheck.php');

if(isset($_SESSION['fname'])){
header("location: registered.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="../JS/jsreg.js"></script>

</head>
<body>
<div  style="text-align:center">
<link rel="stylesheet" type="text/css" href="../CSS/style.css">

<div class="sticky">
<div class="topnav">

<a href="../View/HomePage.php">Home</a>
 
<a href="../View/DoctorLogin.php">LOG IN</a>

<a href="../View/DoctorReg.php">REGISTRATION</a>
 
<a href="../session/logoutcheck.php">LOGOUT</a>
 
</div>
 
</div>
<h2>Doctor Registration Form</h2>
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
<body>

<script src="../JS/searchvalidation.js"></script>

<p id="allerror"></p>
<form action="  " method="POST" onsubmit="return validateForm2()">
<fieldset>


<label for="lname">ID:</label>
 <input type="text" id="id" name="id"><?php echo $lnameError; ?><br>
 <label for="fname">First Name:</label>
 <input type="text" id="fname" name="fname"><?php echo $fnameError; ?><br>
 <p id ="fnameerror">
 <label for="lname">Last Name:</label>
 <input type="text" id="lname" name="lname"><?php echo $lnameError; ?><br>
 <label for="email">Email:</label>
 <input type="text" id="email" name="email"><?php echo $emailError; ?><br>
 <label for="username">User Name:</label>
 <input type="text" id="username" name="username"><?php echo $usernameError; ?><br>
 <label for="password">Password:</label>
 <input type="password" id="password" name="password"><?php echo $passwordError; ?><br>
 <label for="cpassword">Confirm Password:</label>
 <input type="password" id="cpassword" name="cpassword"><?php echo $cpasswordError; ?><br>
 
 <label for="gender">Gender:</label><?php echo $genderError; ?><br>
 <input type="radio" id="male" name="gender" value="male" checked>
 
 <label for="male">Male</label><br>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label><br>
 
 
 <label for="DOB">Date of Birth:</label><?php echo $DOBError; ?><br>
 <input type="date" id="DOB" name="DOB" value="DOB" > <br>

 <input name="submit" type="submit" value="Submit"><br>

<input type="reset">
<fieldset>
</form>


<a href="../View/update.php">Update Regidtration Form</a><br>
<a href="../View/DoctorLogin.php">Go to Doctor Login Page</a><br>

</body>

<?php include '../footer.php';?>

</html>