<?php

function connect_db()
{
    $servername = "localhost";
    $username = "root";
    $password = "21Staross";
    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=camagru", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        header("Location: index.php"); 
    }
    catch (PDOException $e)
    {
        echo "Connection to DB failed".PHP_EOL;    
    }
    return $conn;
}
?>