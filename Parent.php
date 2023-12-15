<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Connect to the database
$db = mysqli_connect('localhost', 'username', 'password', 'database');
if (!$db) {
die('Error: Could not connect to the database');
}

$Name = $_REQUEST['name'];
$Address = $_REQUEST['address'];
$Email = $_REQUEST['email'];
$Phone_number = $_REQUEST['phone_number'];

// Prepare and execute SQL query
$sql = "INSERT INTO parent_table (ParentID, Name, Address, Email, Phone_number) VALUES (NULL, '$Name', '$Address', '$Email', '$Phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: Could not insert parent data" . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>