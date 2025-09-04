<?php

$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["msg"];


// DB Connector
$conn = new mysqli("localhost", "root", "dahamprasadani1", "test9", "3306");

$q = "INSERT INTO `contact` (`name`, `email`,`msg`) 
      VALUES ( '$name', '$email','$msg')";

$conn->query($q);

echo("Product Registered Successfully");

?>