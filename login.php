<?php
// Include the database connection file
include "connect.php";

// Check if the form has been submitted
if (isset($_POST['login'])) {
  // Get the form data
  $adminid = $_POST['adminid'];
  $password = $_POST['password'];

  // Perform the SQL query
  $sql = "SELECT * FROM admin WHERE adminid='$adminid' AND password='$password'";
  $query = mysqli_query($conn, $sql);

  // Check if the query returned any results
  if (mysqli_num_rows($query) > 0) {
    // Start a session
    session_start();

    // Store user ID in the session
    $_SESSION['adminid'] = $adminid;

 
    header("Location: indexadmin.php");
    exit;
  } else {
    // Redirect to the "loginuser.html" page with an error message
    header('Location: login.html?status=failed');
    exit;
  }
}
?>
