<?php
$servername = "localhost";
$database = "db_crud";
$username = "root";
$password = "";

// creat connection
$conn = mysqli_connect($servername, $username, $password, $database);
// check connection
if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
}
echo "connection success!!!";
mysqli_close($conn);
?>