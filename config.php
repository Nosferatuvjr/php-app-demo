<?php
// Exemplo de vulnerabilidade: hardcoded credentials (Gitleaks detecta isso)
$db_host = "localhost";
$db_user = "root";
$db_pass = "supersecretpassword"; // <- segredo no código
$db_name = "mydb";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
?>
