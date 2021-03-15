<?php
class searchdb{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hospital";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function GetUserByUname($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$uname'");
 return $result;
 }

 function InputCheckUser($conn,$table,$fname)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $fname."'");
 return $result;
 }

 function CheckUser($conn,$table){
 $result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

 function UpdateUser($conn,$table,$id,$fname, $lname,$email,$uname,$password,$cpassword,$gender,$bdate)
 {
     $sql = "update doctorreg SET id='$id',fname='$fname',lname='$lname',email='$email',username='$uname',password='$password',cpassword='$cpassword',gender='$gender', DOB='$bdate' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record Updated Successfully!";
    } else {
        $result= "Error Updating Record!" ;
    }
    return $result;
 }

  

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>