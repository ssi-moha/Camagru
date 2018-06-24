<?php

function get_user_by_valid($code)
{
    $db = db_Connect();
    $sth = $db->prepare("SELECT * FROM user WHERE valid = :valid");
    $sth->bindParam(':valid', $code, PDO::PARAM_STR);
    $sth->execute();
    return ($sth);
}