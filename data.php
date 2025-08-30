<?php
header("Content-Type: application/json");

// Dummy user database (replace with real DB later)
$data = [
    "users" => [
        ["username" => "admin", "password" => "Admin123"],
        ["username" => "user1", "password" => "User1234"]
    ]
];

// Login request
if (isset($_POST["action"]) && $_POST["action"] === "login") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    foreach ($data["users"] as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            echo json_encode(["status" => "success", "message" => "Login successful!"]);
            exit;
        }
    }
    echo json_encode(["status" => "error", "message" => "Invalid username or password."]);
    exit;
}

// Signup request
if (isset($_POST["action"]) && $_POST["action"] === "signup") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    echo json_encode([
        "status" => "success",
        "message" => "Account created successfully!",
        "newUser" => $email
    ]);
    exit;
}

echo json_encode($data);
