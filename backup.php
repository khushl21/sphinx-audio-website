<?php
$username = $_POST['username'];
$password = $_POST['pass'];

$conn = new mysqli('localhost', 'root', '', 'db1');
if($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert  into login(username, pass) values(?,?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    echo "Registration Successfull";
    $stmt->close();
    $conn->close();
}
?>