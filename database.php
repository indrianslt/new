<?php 
define("SERVERNAME", "localhost");
define("DATABASE", "test");
define("USERNAME", "root");
define("PASSWORD", "");

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}

// mysqli_close($conn);
?>