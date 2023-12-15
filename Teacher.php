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

$Name = $_POST['name'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$Phone_number = $_POST['phone_number'];
$Salary = $_POST['salary'];
$Education = $_POST['education'];

// Prepare and execute SQL query
$sql = "INSERT INTO teacher_table (TeacherID, Name, Address, Email, Phone_number, Salary, Education) VALUES (NULL, '$Name', '$Address', '$Email', '$Phone_number', '$Salary', '$Education')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: Could not insert teacher data" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>