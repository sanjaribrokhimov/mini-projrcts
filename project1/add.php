<?php

$task = $_POST["task"];
if ($task == ""){
    echo " ведите само задание";
    exit();
}
// echo $task;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "td_bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tasks (task)
VALUES ('$task')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:/project1/index.php")
?>