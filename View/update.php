<?php
include('../Control/searchdb.php');
include('../session/updatecheck.php');

?>
<!DOCTYPE html>
<html>

<div  style="text-align:center">
<script src="../JS/jsreg.js"></script>
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
<h2>Update Registration Form Information</h2>

<form action=" " method='post' onsubmit="return validateForm()">
<fieldset>
  
  <Label>ID:</Label>  
  <input type="text" id="id"  name="id" > <h4 id="jsiderror"></h4>

  <Label>First Name:</Label>  
  <input type="text" id="fname"  name="fname" > <h4 id="jsfnameerror"></h4>

  <Label>Last Name:</Label>  
  <input type="text" id="lname"  name="lname" > <h4 id="jslnameerror"></h4>
  
  <Label>Email:</Label> 
  <input type="text" id="email"  name="email" ><h4 id="jsemailerror"></h4><br>

  <Label>User Name:</Label>  
  <input type="text" id="uname"  name="uname" > <h4 id="jsunameerror"></h4>

  <Label>Password:</Label>  
  <input type="text" id="password" name="password" ><h4 id="jspasserror"></h4>


  <Label>Confirm Password:</Label>  
  <input type="text" id="cpassword" name="cpassword" ><h4 id="jscpasserror"></h4>
  
  
  <Label>Gender:</Label> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br>

  
  <Label>Date of Birth:</Label> 
  <input type="date" id="bdate" name="bdate" ><h4 id="jsbdateerror"></h4>

  <input type="submit" name="update" id="button" value="submit">
  
  
  <a href="update.php"><br><button name="cancel"  id="jCancle">Cancel</button></a>
  <fieldset>
  </form>
  <h2>Registration Information Table</h2>
<?php
$connection = new searchdb();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckUser($conobj,"doctorreg");

echo "<table border='1'>
<tr>
<th>id</th>
<th>fname</th>
<th>lname</th>
<th>email</th>
<th>username</th>
<th>password</th>
<th>cpassword</th>
<th>gender</th>
<th>DOB</th>



</tr>";
if ($userQuery->num_rows > 0) {

        while($row = $userQuery->fetch_assoc()) {
            echo  "<tr>";
            echo"<td>".$row["id"]."</td>";
            echo "<td>".$row["fname"]."</td>";
            echo"<td>".$row["lname"]."</td>";    
            echo"<td>".$row["email"]."</td>";
            echo "<td>".$row["username"]."</td>";      
            echo "<td>".$row["password"]."</td>";
            echo "<td>".$row["cpassword"]."</td>";
            echo "<td>".$row["gender"]."</td>";
            echo "<td>".$row["DOB"]."</td>";
            


            echo "</tr>";
        }
        echo "</table>"; 
        } 
      else {
        echo "0 results";
      } 


?>

</html>



