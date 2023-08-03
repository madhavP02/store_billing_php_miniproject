<?php
// CONNECTING TO DATABASE
$servername = "localhost";
$username = "root";
$password = "";
$database = "react-login";
// CREATING A CONNECTION
$conn = mysqli_connect($servername, $username, $password, $database);
// CHECK CONNECTION
if(!$conn) {
die("Connection failed: ".mysqli_connect_error());
} else {
echo "Connected successfully!";
}
?>