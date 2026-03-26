<?php
$conn = new mysqli("localhost", "root", "", "chat_app");

$result = $conn->query("SELECT * FROM messages ORDER BY id ASC");

$data = [];

while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>