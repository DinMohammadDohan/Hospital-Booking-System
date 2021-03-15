<?php
$error="";
$id = $fname = "";
if (isset($_POST['update'])){
  if ((empty($_POST['fname']))) {
    
 $error = "Enter correct input";
    
    }
    else
{
  $id=$_POST['id'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $uname=$_POST['uname'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $gender=$_POST['gender']; 
  $bdate=$_POST['bdate'];
  

$connection = new searchdb();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"doctorreg",$id,$fname, $lname,$email,$uname,$password,$cpassword,$gender,$bdate);

echo $userQuery;
$connection->CloseCon($conobj);

}
}
?>