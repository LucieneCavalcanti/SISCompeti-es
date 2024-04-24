<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdcompeticoes";

try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "<h2 style='color:red'>Erro:<br>" . $e->getMessage() . "</h2>";
}