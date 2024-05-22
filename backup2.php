<?php
$email = $_POST['email'];
$username = $_POST['u_name'];
$password = $_POST['pass'];
$conn = new mysqli('localhost', 'root', '', 'db2');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert  into signup(email,username, pass) values(?,?,?)");
    $stmt->bind_param("sss",$email,$username, $password);
    $stmt->execute();
    echo "Registration Successfull";
    $stmt->close();
    $conn->close();
}
?>