<?php

$host = 'localhost';
$dbname = 'minor_project';
$username = 'root';
$password = 'adminnorman';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected successfullly....";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>