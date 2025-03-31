<?php
include('config.php');

// SQL Injection clássica
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'"; // <- SQLi
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Logged in!";
    } else {
        echo "Invalid credentials.";
    }
}
?>
