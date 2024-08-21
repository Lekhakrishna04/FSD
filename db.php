<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "project1";

try{
$conn = new PDO("mysql:username=$user;dbname=$dbname",$user,$pass);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected Successfully";
}
catch(PDOException $e){
    echo 'Connection Failed'.$e ->getMessage();
}
