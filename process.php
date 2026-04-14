<?php
// Set the content type to JSON
header('Content-Type: application/json');

// Mock database
$users = [
    1 => ["name" => "Alice Smith", "role" => "Web Developer"],
    2 => ["name" => "Bob Johnson", "role" => "UI/UX Designer"],
    3 => ["name" => "Charlie Brown", "role" => "System Architect"]
];

// Get the ID from the URL parameter
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Check if user exists and return response
if (array_key_exists($id, $users)) {
    echo json_encode($users[$id]);
} else {
    echo json_encode(["error" => "User not found."]);
}
?>