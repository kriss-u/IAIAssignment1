<?php
$servername = "localhost";
$username = "kriss";
$password = "ahensirk";
$db = "assignment1";
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
}
echo "Connected successfully"."<br>";

