<?php require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
<form method="post" class="container py-4">
    <h2>Add New User</h2>
    <input name="name" class="form-control mb-2" placeholder="Name" required>
    <input name="email" class="form-control mb-2" placeholder="Email" required>
    <button class="btn btn-primary">Save</button>
    <a href="index.php" class="btn btn-secondary">Back</a>
</form>
