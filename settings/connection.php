<?php
$host= 'localhost';
$name = 'root';
$password ='';
$db = 'remote_natembea';
$conn = new mysqli($name, $name, $password, $db);
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}else {
    echo "Connected successfully!";
}

// Don't forget to close the connection when you are done
$conn->close();
?>