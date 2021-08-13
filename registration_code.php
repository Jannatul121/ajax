<?php
require_once('connection.php');
include 'DBinsert.php';
$fname = $lname = $gender = $dob = $religion = $presentAdd = $permanentAdd = $phone = $email = $website = $username = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$religion = $_POST['religion'];
$presentAdd = $_POST['presentAdd'];
$permanentAdd = $_POST['permanentAdd'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$website = $_POST['website'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO user (Firstname,Lastname,Gender,DOB,Religion,Presentaddress,Permanentaddress,Phone,Email,Website,Username,Password) VALUES ('$fname','$lname','$gender','$dob','$religion','$presentAdd','$permanentAdd','$phone','$email','$website','$username','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>