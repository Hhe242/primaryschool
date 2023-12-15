<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$StudentID = $_POST['StudentID'];
$ParentID = $_POST['ParentID'];

// Prepare and execute SQL query
$sql = "INSERT INTO parentstudentrelations_table (StudentID, ParentID) VALUES ('$StudentID', '$ParentID')";
if ($conn->query($sql) === TRUE) {
  echo "New link created successfully";
  } else {
    echo "Error: Could not link Parent and Student ID" . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>