<?php
$host = 'localhost';
$username = 'root';
$password = '123';
$database = 'bookstore';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8');
$conn->query("SET collation_connection = utf8_general_ci");
?>
