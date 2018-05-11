<?php

function get_user_by_username($username)
{
    $db = db_Connect();
    $sth = $db->prepare("SELECT * FROM user WHERE username = :username");
    $sth->bindParam(':username', $username, PDO::PARAM_STR);
    $sth->execute();
    return ($sth);
}