<?php

$host = 'localhost:3306';
$user = 'root';
$password = 'password';
$database = 'blog';

$connection = new mysqli($host,$user,$password,$database);

if($connection->connect_errno){
    echo 'Failed to connect' . $connection->connect_error;
    exit();
}

$artigos = $connection->query('SELECT * FROM articles');
$results = $artigos->fetch_all(MYSQLI_ASSOC);