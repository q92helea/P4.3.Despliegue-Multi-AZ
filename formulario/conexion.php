<?php
$servername = "cluster.csynvpwd2wf0.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Root1234$";
$bd="cluster";
// Create connection
$conn = new  mysqli($servername, $username, $password, $bd);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
   } catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
echo "Conexión exitosa";