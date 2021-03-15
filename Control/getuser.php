<?php
include('searchdb.php');

$user = $_POST['uname'];

if($user=="")
{
    echo "Please give input to find the data!<br><br>";
}
if($user != "")
{
    $connection = new searchdb();
    $conobj=$connection->OpenCon();
    $MyQuery=$connection->GetUserByUname($conobj,"doctorreg",$user );
    
    if ($MyQuery->num_rows > 0) {
        while($row = $MyQuery->fetch_assoc()) {
          echo "<table border=1>".
          
          "<tr>".
          "<th>"."id"."</th> ".
          "<th>"."fname"."</th> ".
          "<th>"."lname"."</th> ".
          "<th>"."email"."</th> ".
          "<th>"."username"."</th> ".
          "<th>"."password"."</th> ".
          "<th>"."cpassword"."</th> ".
          "<th>"."gender"."</th> ".
          "<th>"."DOB"."</th> ".

        "</tr>".
      
        "<tr>".

         "<td>".$row["id"]."</td>".
         "<td>".$row["fname"]."</td>".
          "<td>".$row["lname"]."</td>".
          "<td>".$row["email"]."</td>".    
          "<td>".$row["username"]."</td>".
          "<td>".$row["password"]."</td>".      
          "<td>".$row["cpassword"]."</td>".
          "<td>".$row["gender"]."</td>".
          "<td>".$row["DOB"]."</td>".
        "</tr>".
      
      "</table>";
        }
        echo "</table>";
      }
}
?>
<!DOCTYPE html>

  <a href="update.php"><br><button name="Update" id="update">Update Registration Form?</button></a><br>
  
<?php
$cookie_name = "user";
$cookie_value =$user;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>


</html>