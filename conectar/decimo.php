<?php

//$hostname_decimo = "p:localhost";
//$database_decimo = "decimo";
//$username_decimo = "root";
//$password_decimo = "";
//$decimo = mysqli_connect($hostname_decimo, $username_decimo, $password_decimo, $database_decimo);
//mysqli_set_charset($decimo, 'utf8');
?>
<?php
$servername = "p:localhost";
$username = "root";
$database = "decimo";
$password = "";
//  Create a new connection to the MySQL database using PDO
$decimo = new mysqli($servername, $username, $password);
// Check connection
if ($decimo->connect_error) {
    die("Connection failed: " . $decimo->connect_error);
}
echo "Connected successfully";
?>
