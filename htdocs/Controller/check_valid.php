<?php

function check_valid($code)
{
    $sth = get_user_by_valid($code);
    $count = $sth->rowCount();
    if ($count == 0)
    {
        echo "test".PHP_EOL;
        return FALSE;
    }
    $user = $sth->fetchAll();            
    return $user[0]['username'];
}