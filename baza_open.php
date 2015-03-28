<?php
/**
 * Created by PhpStorm.
 * User: ja
 * Date: 2015-03-23
 * Time: 19:40
 */
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=serwisowa", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}/*
$stm = $conn->query('SELECT idc, opis FROM czynnosc');
echo '<ul>';
foreach ($stm as $row) {
    print $row['idc'] . "\t";
    print $row['opis'] . "\n";
    echo '</br>';
}*/
?>