<?php

    function get_user_by_username($code)
    {
        $db = db_Connect();
        $sth = $db->prepare("INSERT INTO user WHERE valid= :valid");
        $sth->bindParam(':valid', $code, PDO::PARAM_STR);
        $sth->execute();
        return ($sth);
    }