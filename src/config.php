<?php
$host = 'mysql';
$db   = 'app_db';
$user = 'app_user';
$pass = 'app_pass';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
