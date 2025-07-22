<?php
require 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="post" class="container py-4">
    <h2>Edit User</h2>
    <input name="name" class="form-control mb-2" value="<?= $user['name'] ?>" required>
    <input name="email" class="form-control mb-2" value="<?= $user['email'] ?>" required>
    <button class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-secondary">Back</a>
</form>
