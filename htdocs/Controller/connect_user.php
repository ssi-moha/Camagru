<?php

require_once "check_auth.php";

function connect_user($username, $passwd)
{
if (isset($username) && isset($passwd))
    if (check_auth($username, $passwd))
    {
        $_SESSION['logged'] = $username;
        return TRUE;
    }    
return FALSE;
}