<?php
$q = $_GET["q"];
$con = mysqli_connect('localhost', 'peter', 'abc123', 'ajax_demo');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql = "SELECT * FROM user WHERE id = '" . mysqli_real_escape_string($con, $q) . "'";
$result = mysqli_query($con, $sql);
if (!$result) {
  die('Error: ' . mysqli_error($con));
}
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" .$row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>