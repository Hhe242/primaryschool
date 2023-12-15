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

$Name = $_REQUEST['name'];
$ClassID = $_REQUEST['ClassID'];
$Medical = $_REQUEST['medical'];
$DoB = $_REQUEST['dob'];

// Prepare and execute SQL query
$sql = "INSERT INTO student_table (StudentID, ClassID, Name, Medical_Information, DoB) 
VALUES (NULL, '$ClassID','$Name', '$Medical', '$DoB')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: Could not insert student data" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>