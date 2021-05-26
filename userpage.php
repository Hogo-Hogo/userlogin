<?php
session_start(); // spuštění sezení 
include_once 'pripojeni.php'; // login to database 
if (isset($_GET['username']))
$prezdivka = $_GET['username'];
$sql = "SELECT id, username, img, content FROM users WHERE username='$prezdivka' ORDER BY created_at"; // my users, I take their username, picture, profile information and id on username ($_GET['username'])
$result = $conn->query($sql); // passing code $sql to the database

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<table border="1"><tr><td>ID: </td><td>' . $row["id"]. '</td></tr><tr> <td> Username: </td><td class="boxik"> ' . $row["username"]. $row["img"] .'</td></tr><tr><td>Profile info: </td><td>' . $row["content"]. '</td></tr></table>';
  }
} else {
  echo "<title>No result! :(</title>Oh no! There is no one with this nickname. :(";
}
$conn->close();
?></center>
<title><?php echo $prezdivka; ?> – Profile</title>
