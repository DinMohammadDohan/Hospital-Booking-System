
<?php
include('../session/db.php'); 
?>  
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div  style="text-align:center"> <br><br>
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
<h1>  Patient Form Checking </h1>


<?php

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowUser($conobj,"appointment");

echo "<table border='1'>
<tr>
<th>pid</th>
<th>name</th>
<th>email</th>
<th>gender</th>
<th>age</th>
<th>phoneno</th>
<th>dept</th>
<th>appdate</th>
<th>appt</th>


</tr>";
if ($userQuery->num_rows > 0) {

        while($row = $userQuery->fetch_assoc()) {
            echo  "<tr>";
            echo"<td>".$row["pid"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo"<td>".$row["email"]."</td>";    
            echo"<td>".$row["gender"]."</td>";
            echo "<td>".$row["age"]."</td>";      
            echo "<td>".$row["phoneno"]."</td>";
            echo "<td>".$row["dept"]."</td>";
            echo "<td>".$row["appdate"]."</td>";
            echo "<td>".$row["appt"]."</td>";
            


            echo "</tr>";
        }
        echo "</table>"; 
        } 
      else {
        echo "0 results";
      } 
?>

<a href="../View/search.php">search and update Registration Form</a><br>
<h5>Do you want to <a href="../session/logoutcheck.php">logout</a></h5>
</body>
</html>