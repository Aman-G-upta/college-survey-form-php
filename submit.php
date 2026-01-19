<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "college_survey");

if ($conn->connect_error) {
    die("Connection failed");
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$year = $_POST['year'];
$feedback = $_POST['feedback'];

// Insert query
$sql = "INSERT INTO survey (name, email, department, year, feedback)
        VALUES ('$name', '$email', '$department', '$year', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Thank you! Survey submitted successfully.</h2>";
} else {
    echo "Error";
}

$conn->close();
?>
