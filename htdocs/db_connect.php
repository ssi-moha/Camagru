<?php

function db_connect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=camagru;charset=utf8', 'root', 'root42');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}