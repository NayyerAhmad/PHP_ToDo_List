<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "todolistphp";

try {
    $conn = new PDO("mysql:hone=$sName;dbname=$db_name",
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOEXCEPTION $e){
    echo "connection failed : ". $e->getMessage();
}