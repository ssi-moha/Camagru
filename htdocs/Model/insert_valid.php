<?php

    function insert_valid($user)
    {
        $db = db_Connect();
        $sth = $db->prepare("UPDATE user SET valid = 'OK' WHERE username = :user");
        $sth->bindParam(':user', $user, PDO::PARAM_STR);
        $sth->execute();
        return ($sth);
    }