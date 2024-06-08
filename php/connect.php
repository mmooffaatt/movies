<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$db = "Movies";

// Connecting to db
$con = mysqli_connect($localhost, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $createtable = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if (mysqli_query($con, $createtable)) {
        /*echo "<script>
        alert('Connection to db and table creation successful.');
        </script>";*/
    } else {
        echo "Error creating table: " . mysqli_error($con);
    }
}
?>
