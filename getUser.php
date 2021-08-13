<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect("localhost","wtk","@1234","FinalLab1");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>DoB</th>
<th>Religion</th>
<th>PresentAdd</th>
<th>PermanentAdd</th>
<th>Phone</th>
<th>Email</th>
<th>Website</th>
<th>Username</th>
<th>Password</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Gender'] . "</td>";
  echo "<td>" . $row['DoB'] . "</td>";
  echo "<td>" . $row['Religion'] . "</td>";
  echo "<td>" . $row['PresentAdd'] . "</td>";
  echo "<td>" . $row['PermanentAdd'] . "</td>";
  echo "<td>" . $row['Phone'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Website'] . "</td>";
  echo "<td>" . $row['Website'] . "</td>";
  echo "<td>" . $row['Password'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>