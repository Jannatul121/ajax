<?php
$conn =new mysqli("localhost","wtk","@1234","FinalLab1");

if($conn-> connect_errno)
{
die("connection failed: ".$conn-> connect_errno); 
}
return $conn;
}
?>