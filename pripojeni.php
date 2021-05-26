<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'my_users';
$conn = mysqli_connect($servername,$username,$password,"$dbname"); // connecting 
if(!$conn){
die('Error: ' .mysql_error());
}
?>
