<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];

mysqli_query($connection, "INSERT INTO customer(name, email) VALUES ('$name', '$email')")or die(mysqli_error());

header("location:shop.php");
?>