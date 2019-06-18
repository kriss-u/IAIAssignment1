<!DOCTYPE HTML>
<html>
<head>
    <title>Hello <?php echo $_POST["name"] ?></title>
</head>
<body>
<?php
$name = $_POST["name"];
$address = $_POST["address"];
$age = $_POST["age"];
echo "Hello $name"."<br>";
echo "Your address is $address"."<br>";
echo "You are $age years old"."<br>";
echo "This information is being submitted to the database."."<br>";
require "db_connect.php";
//$sql = 'INSERT INTO information (Name, Address, Age) VALUES ("$name", "$address", "$age")';
$sql = "INSERT INTO information (Name, Address, Age)
VALUES ('$name', '$address', '$age')";
if ($conn->query($sql) === TRUE) {
    echo "Information added."."<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<a href="index.php">Click here to go to home page.</a>
</body>
</html>