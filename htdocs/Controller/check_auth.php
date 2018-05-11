<?php


function check_auth($username, $passwd)
{
    $sth = get_user_by_username($username);
    if ($sth->rowCount() == 0)
    {
        echo "Wrong username".PHP_EOL;
        return FALSE;
    }
    $user = $sth->fetchAll();
    $hash = hash('whirlpool', $passwd);
    if (strcmp($user[0]['passwd'], $hash) != 0)
    {        
        return FALSE;
    }
    return TRUE;
}
