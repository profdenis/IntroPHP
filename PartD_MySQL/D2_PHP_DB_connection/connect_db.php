<?php
// from https://www.w3schools.com/php/php_mysql_connect.asp

$servername = "localhost";
$db = "introdb";
$username = "intro";
// good enough for now, but should store the password somewhere else for security
$password = "intro";

// add (or uncomment) a line similar to this in the php.ini file, and restart PhpStorm
// extension=C:\path\to\php\ext\php_mysqli.dll
echo "With mysqli<br>";
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// add (or uncomment) a line similar to this in the php.ini file, and restart PhpStorm
// extension=C:\path\to\php\ext\php_pdo_mysql.dll
echo "<br><br>With PDO<br>";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}