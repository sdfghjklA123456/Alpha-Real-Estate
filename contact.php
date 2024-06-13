<?php
include "connect.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO customer (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo '<p style="color: green;">Thank you for your message. We will get back to you soon!</p>';
    } else {
        echo '<p style="color: red;">There was an error processing your message. Please try again later.</p>';
    }

    $stmt->close();
}

$conn->close();
?>
