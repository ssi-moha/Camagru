<?php

function create_user($username, $passwd, $email)
{
    $hash = hash('whirlpool',$passwd);
    $db = db_connect();
    $str = set_string_confirm($email);    
    echo $str.PHP_EOL;
    $sth = $db->prepare("INSERT INTO user (username, passwd, email, private, nb_posts, valid) VALUES (:username , :passwd , :email, 0, 0, :valid)"); 
    $sth->bindParam(':username', $username, PDO::PARAM_STR);
    $sth->bindParam(':passwd', $hash, PDO::PARAM_STR);
    $sth->bindParam(':email', $email, PDO::PARAM_STR);
    $sth->bindParam(':valid', $str, PDO::PARAM_STR);
    $sth->execute();
    $user = $sth->fetchAll();
    return $user;
}