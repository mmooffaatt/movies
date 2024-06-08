<?php
session_start();
include("connect.php");

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // Prepare the SQL statement
    $stmt = $con->prepare("SELECT id, username, password FROM users WHERE email = ?");
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($con->error));
    }

    // Bind the parameter
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // Bind the result variables
        $stmt->bind_result($id, $username, $hashed_pass);

        // Fetch the result
        $stmt->fetch();

        // Verify the password
        if (password_verify($pass, $hashed_pass)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;

            /*echo "<script>
            alert('Login successful. Welcome, $username!');
            </script>";*/
            
            echo "<script>
            window.location.href = 'dashboard.php';
            </script>";
            
        } else {
            echo "<script>
            alert('Incorrect password.');
            window.location.href = '../login.html';
            </script>";
        }
    } else {
        echo "<script>
        alert('No user found with that email.');
        window.location.href = 'login.html';
        </script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$con->close();
?>
