<?php
/* @var array $secrets */

//Database connection

$dbhost = $secrets["database"]["host"];
$dbport = $secrets["database"]["port"];
$dbuser = $secrets["database"]["username"];
$dbpass = $secrets["database"]["password"];
$dbname = $secrets["database"]["name"];

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
?>