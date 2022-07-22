<?php
$db_server = "10.11.12.200";
$db_username = "ipdc_afiq";
$db_password = "AfiqAdha18";
$db_name = "ipdc_team";

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_id, user_name, user_pass, user_email, user_status FROM login_info ORDER BY user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["user_id"]. " | User Name: " . $row["user_name"]. " | User Password: " . $row["user_pass"] . " | User Email: " . $row["user_email"] . " | User Status:" . $row["user_status"]. "<br>";
  }
} else {
  echo "0 results";
}

$user_name_php = 'root';
$user_password_php = '1PDCH3b4tg1l3r';
$user_password_php = md5($user_password_php);

$compare = "SELECT * FROM login_info WHERE user_name = '$user_name_php' AND user_pass = '$user_password_php'";
$compare_result = $conn->query($compare);
if ($compare_result->num_rows > 0) {
  echo "<br>Can Login Now!";
} else {
  echo "<br>Unable to Login!";
}

$conn->close();
?>