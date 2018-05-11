
<?php

require_once "db_connect.php";

function get_user_by_id($id)
{
    
    $db = db_Connect();
    $sth = $db->prepare("SELECT * FROM user WHERE id = :id"); 
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $user = $sth->fetchAll();
    return $user;
}