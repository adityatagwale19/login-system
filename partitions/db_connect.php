<?php
// make a connection
$servername = 'localhost';
$username = "root";
$password = "root";
$database = "dbfirst";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Check your database connection" . mysqli_connect_error());
