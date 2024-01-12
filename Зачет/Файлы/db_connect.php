<?php
$address = "localhost";
$username = "root";
$password = "12345678";
$dbname = "teleyslyg";

$conn = new mysqli($address, $username, $password, $dbname);
$sql = "SET CHARACTER SET 'utf8'";
$conn->query($sql);
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>