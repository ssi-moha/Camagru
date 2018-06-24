<?php

function check_email($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE)
    {
        echo "email $email is invalid".PHP_EOL;
        return FALSE;
    }
    /*$sth = get_user_by_mail($email);
    $count = $sth->rowCount();
    if ($count > 0)
    {
        echo "email $email already used by someone";
        return FALSE;
    }*/
    return TRUE;
}