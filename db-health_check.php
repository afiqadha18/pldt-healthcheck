<?php
$servername = "10.11.12.200";
$username = "ipdc_afiq";
$password = "AfiqAdha18";
$dbname = "health_report";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_id, user_name, user_pass, user_status FROM login_info ORDER BY user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["user_id"]. " | User Name: " . $row["user_name"]. " | User Password: " . $row["user_pass"]. " | User Status:" . $row["user_status"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>