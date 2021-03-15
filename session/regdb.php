<?php
class regdb{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "Hospital";
$conn = new mysqli($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}       

function insertUser($conn,$id,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB )
{
    $stmt=$conn->prepare("insert into doctorreg(id,fname,lname,email,username,password,cpassword,gender,DOB) values(?,?,?,?,?,?,?,?,?)") or die(mysqli_error($conn));
    $stmt->bind_param("sssssssss",$id,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB) or die(mysqli_error($conn));
    $stmt->execute();
    echo "<h3>Registration Successful!</h3>";
    $stmt->close();}

// function insertUser($conn,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB)
// {
// $result=$conn->query("insert into doctorreg(fname,lname,email,password,cpassword,gender,DOB) values('$fname','$lname','$email','$password','$cpassword','$gender','$profession','$DOB')") or die(mysqli_error($conn));
// return $result;
}
function CloseCon($conn)
{ $conn -> close(); }
}
 /$_SESSION["fname"],$_SESSION["lname"],$_SESSION["email"],$_SESSION["uname"],$_SESSION["password"],$_SESSION["cpassword"],$_SESSION["gender"], $_SESSION["DOB"]);
?>
