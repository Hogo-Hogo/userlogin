<!DOCTYPE html>
<html>
  <head>
  <title>Search engine of users </title>
  </head>
<body>
  <form action="userpage.php" method="GET">
    <table>
        <tr><td>Username to search:</td><td><input type="text" id="username" list="user" name="username"></td></tr>
        <tr><td></td><td><button type="submit">Search</button></td></tr>
    </table> 
</form> 
  <!-- Datalist from search -->
<datalist id="user">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Chyba: " . $conn->connect_error);
}

$sql = "SELECT username FROM users ORDER BY created_at";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<option value="' .  $row['username'] . '">
    </option>';
  }
} else {
  echo "0 results";
}
$conn->close(); 
?>
</datalist>
