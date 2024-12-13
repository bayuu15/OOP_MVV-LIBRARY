<?php

$host = "localhost";
$dbname = "library";
$username = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$dbname",$username);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Connection Fail: " . $e->getMessage());
}

