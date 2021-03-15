<?php
include('../session/logincheck.php');

if(isset($_SESSION['username'])){
header("location: DoctorAppovalForm.php");
}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
 </div>
 </li>
</ul>
<div  style="text-align:center">
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
<br><br><br><br><br><br>
<h1>Doctor Login</h1>
<form action="" method="post">

<input type="text" name="username" placeholder="Enter your username!"><?php echo $usernameerror; ?><br><br>
<input type="password" name="password" placeholder="Enter your password!" ><?php echo $passworderror; ?><br><br>
<input name="submit" type="submit" value="Login"><br>
<input type="reset"><br><br>
<a href="DoctorReg.php">Back to Registration</a><br>


</form>
<br>
</body>
</html>