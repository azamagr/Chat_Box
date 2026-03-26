<?php
$conn = new mysqli("localhost", "root", "", "chat_app");

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (sender, receiver, message)
        VALUES ('$sender', '$receiver', '$message')";

$conn->query($sql);
?>