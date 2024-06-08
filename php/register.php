<?php
include("connect.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($con->error));
    }

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    $stmt->bind_param("sss", $name, $email, $hashed_pass);

    if ($stmt->execute()) {
        /*echo "<script>
        alert('Records inserted successfully.');
        </script>";
        */
        echo "<script>
        window.location.href = '../login.html';
        </script>";
        
    } else {
        echo "<script>
        alert('Records not inserted.');
        window.location.href = '../index.html';
        </script>";
    }

    $stmt->close();
}

$con->close();
?>
