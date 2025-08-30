<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2 style='text-align:center; color:green;'>Form Submission Successful 🎉</h2>";
    echo "<div style='width:60%;margin:auto;padding:20px;border:2px solid #6c63ff;border-radius:10px;background:#f9f9f9;'>";

    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $password = htmlspecialchars($_POST['password']); // just for demo, never show passwords in real apps!
    $city = htmlspecialchars($_POST['city']);
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "Not Selected";
    $bio = htmlspecialchars($_POST['bio']);

    // Display values
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Password:</strong> (hidden for security)</p>";
    echo "<p><strong>City:</strong> $city</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";

    if (!empty($_POST['hobbies'])) {
        echo "<p><strong>Hobbies:</strong> " . implode(", ", $_POST['hobbies']) . "</p>";
    } else {
        echo "<p><strong>Hobbies:</strong> None selected</p>";
    }

    echo "<p><strong>Bio:</strong> $bio</p>";
    echo "</div>";
} else {
    echo "<h3 style='color:red; text-align:center;'>No data submitted!</h3>";
}
?>
