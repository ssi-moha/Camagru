<?php

function check_username($username)
{
    
    $sth = get_user_by_username($username);
    $count = $sth->rowCount();
    if ($count > 0)
    {    
        echo "User $username already exist";
        return FALSE;
    }
    return TRUE;
}