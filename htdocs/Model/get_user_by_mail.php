<?php


function get_user_by_mail($email)
{
    $db = db_connect();
    $sth = $db->prepare("SELECT * FROM user WHERE email = :email");
    $sth->bindParam(':email', $email, PDO::PARAM_STR);
    $sth->execute();
    return ($sth);
}